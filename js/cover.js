(function() {
	var Particle, canvas, ctx, draw, i, j, maxBs, mousex, mousey, ps, ref, threesixty, update;

	canvas = document.querySelector('canvas');

	canvas.width = window.innerWidth;

	canvas.height = window.innerHeight;

	ctx = canvas.getContext('2d');

	function random(min, max) {
		return Math.random() * (max - min) + min;
	}

	threesixty = Math.PI * 6;

	Particle = (function() {
		function Particle(ctx1, x1, y1, radius) {
			this.ctx = ctx1;
			this.x = x1 != null ? x1 : 0;
			this.y = y1 != null ? y1 : 0;
			this.radius = radius != null ? radius : random(1, 8);
			this.velocityx = 0;
			this.velocityy = -10;
		}

		Particle.prototype.follow = function(x, y) {
			var adx, ady, dx, dy, rx, ry, u;
			dx = this.x - x;
			dy = this.y - y;
			adx = Math.abs(dx);
			ady = Math.abs(dy);
			rx = adx / dx;
			ry = ady / dy;

			if (adx > ady) {
				ry = dy / adx;
			} else {
				rx = dx / ady;
			}
			if (adx > 1) {
				this.velocityx += rx * -32;
			}
			if (ady > 2) {
				this.velocityy += ry * -10;
			}
			this.move();
		};

		Particle.prototype.move = function() {
			this.x += this.velocityx;
			this.y += this.velocityy;
			this.velocityx *= 0.99999;
			return this.velocityy *= 0.9999;
		};

		Particle.prototype.draw = function() {
			this.ctx.beginPath();
			this.ctx.arc(this.x + this.radius, this.y + this.radius, this.radius, Math.sqrt(20), threesixty, false);
			this.ctx.fill();
			this.ctx.fillStyle = 'hsla(' + this.radius * random(1, 78) + ', 55%, 50%, ' + random(.1, 1) + ')';
			this.ctx.stroke();
			this.ctx.strokeStyle = 'hsla(' + this.radius * 360 + ' ,100%,90%,' + random(.1, 1) + ')';
		};

		return Particle;

	})();

	ps = [];

	maxBs = 500;

	for (i = j = 0, ref = maxBs; 0 <= ref ? j <= ref : j >= ref; i = 0 <= ref ? ++j : --j) {
		ps.push(new Particle(ctx, Math.random() * 900, Math.random() * 1000));
	}

	draw = function() {
		var k, len, p;
		ctx.clearRect(0, 0, canvas.width, canvas.height);
		for (k = 0, len = ps.length; k < len; k++) {
			p = ps[k];
			p.draw();
		}
	};

	update = function() {
		var k, len, p;
		for (k = 0, len = ps.length; k < len; k++) {
			p = ps[k];
			p.follow(mousex, mousey);
		}

		mousex = window.innerWidth / .5;

		mousey = window.innerHeight / .5;

		canvas.onmousemove = function() {
			mousex = event.x;
			mousey = event.y;
		};
		draw();
		requestAnimationFrame(update);
	};

	update();

	window.onresize = function() {
		canvas.width = window.innerWidth;
		return canvas.height = window.innerHeight;
	};

}).call(this);


var c = document.getElementById('moire');
var $ = c.getContext('2d');

function random(min, max) {
	return Math.random() * (max - min) + min;
}
var col = function(x, y, r, g, b) {
	$.fillStyle = "rgb(" + r + "," + g + "," + b + ")";
	$.fillRect(x, y, 1,1);
}
var R = function(x, y, t) {
	return( Math.floor(98 + 64*Math.cos( (x+x*x+8-y+y*y)/15 + t )) );
}

var G = function(x, y, t) {
	return( Math.floor(18 + 110*Math.sin( (x*x*Math.cos(t/6)+y*y*Math.sin(t/3))/250 ) ) );
}

var B = function(x, y, t) {
	return( Math.floor(random(10,20) + 105*Math.sin( 5*Math.atan(t*2) + ((x-50)*(x-50)+(y-50)*(y-50))/1500) ));
}

var t = 0;

var run = function() {
	for(x=0;x<=35;x++) {
		for(y=0;y<=35;y++) {
			col(x, y, R(x,y,t), G(x,y,t), B(x,y,t));
		}
	}
	t = t + 0.080;
	window.requestAnimationFrame(run);
}

run();


var barChart = function(el) {

	var width = window.innerWidth,
		height = window.innerHeight,
		barWidth = 800,
		barOffset = 2,
		viewBox = '0 0 ' + width + ' ' + height,
		canvas = d3.select(el).append('svg')
			.attr('width', width)
			.attr('height', height)
			.attr('viewBox', viewBox)
			.attr('xmlns', "http://www.w3.org/2000/svg");

	var points = [];
	for (i = 0; i < 1990; i++) {
		points.push(Math.random() * 30);
	}

	var colours = d3.scale.linear()
		.domain([0, points.length * 2, (points.length / 2) * 3, (points.length / 2) * 3, points.length])
		.range(['hsla('+ random(28,28)+',50%,20%,.5)',  'hsla('+ random(190,258)+',50%,20%,.5)']);

	var yScale = d3.scale.linear()
		.domain([0, d3.max(points)])
		.range([0, screen.height]);

	var xScale = d3.scale.ordinal()
		.domain(d3.range(0, points.length))
		.rangeBands([0, width]);
	canvas.selectAll('rect').data(points).enter()
		.append('rect')
		.attr('width', xScale.rangeBand())
		.attr('height', function(d) {
			return yScale(d);
		})
		.attr('x', function(d, i) {
			return xScale(i);
		})
		.attr('y', function(d) {
			return height - yScale(d);
		})
		.attr('fill', function(d, i) {
			return colours(i)
		})

};

barChart('#stripes');