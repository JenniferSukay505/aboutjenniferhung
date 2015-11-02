var c = document.getElementById("c");
var ctx = c.getContext("2d");
var cw = c.width = 400;
var ch = c.height = 400;
var cx = cw/2,cy = ch/2;
var rad = Math.PI / 180;
var frames = 0;
var stopped = true;

var R = 10;
ctx.fillStyle = "rgba(0,0,0,.05)";
ctx.lineWidth = 3;
ctx.strokeStyle = "white";

function heart(r){
	ctx.beginPath();
	for( var t = 0; t < 360; t++){
		var x = cx + (16*r*(Math.sin(t*rad) *Math.sin(t*rad) *Math.sin(t*rad) ) );
		var y = cy - 13*r*Math.cos(t*rad) +
			5*r*Math.cos(2*t*rad) +
			2*r*Math.cos(3*t*rad) +
			r*Math.cos(4*t*rad);
		ctx.lineTo(x,y);
	}

	ctx.closePath();
	ctx.stroke();}

function Draw(){
	frames +=2;
	k = Math.sin(frames*rad);
	ctx.fillRect(0,0,cw,ch);
	var r = R * Math.abs(k);
	var l = 100-((100 * Math.abs(k))/2);
	ctx.strokeStyle = "hsl(0,100%, "+l+"%)";
	heart(r)

	requestId = window.requestAnimationFrame(Draw);
}

function start() {
	requestId = window.requestAnimationFrame(Draw);
	stopped = false;
}
function stopAnim() {
	if (requestId) {
		window.cancelAnimationFrame(requestId);
	}
	stopped = true;
}



window.addEventListener("load", function(){start();},false);