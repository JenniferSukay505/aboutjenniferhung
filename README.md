# aboutjenniferhung
personal website

##Milestone 1 Feedback
Good job on completing Milestone 1. The purpose, audience, and goal will drive our planning and development going forward - and we will be building upon these three things in Milestone 2.

Please keep deadlines in mind going forward, and keep things simple - simplicity is so important in these early stages. :-)

Unfortunately because this was submitted late, I can only pass your Milestone 1 at [Tier 1](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're now ready to start Milestone 2.

###Suggestions &amp; Edits
There are a few edits I'd like you to make, and a few very minor errors in your code:
- Move your CSS folder inside of /public_html
- You are loading jQuery v3 which is an unstable alpha release. We will be using jQuery version 2.1.4, so load that version instead. (See line 22)
- Remove lines 56 - 59 in milestone-1.php. We will be loading our JavaScript libraries in the &lt;head&gt; tag, and you already have these libraries loaded on lines 22 and 23 anyway.
- Remove the "http:" from the src URLs in your &lt;link&gt; and &lt;script&gt; tags. This will make these links protocol agnostic.
- The closing &lt;/body&gt; and &lt;/html&gt; tags are missing in milestone-1.php
- Remove @charset from your CSS file. It is not unnescessary since you are not using non-ASCII characters in your CSS.

##Milestone 2 Feedback
Good job on Milestone 2. All requirements have been met, and this provides enough direction to move forward with wireframes. Your Milestone 2 passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

###Suggestions &amp; Edits
- add /vendor on line 3 of .gitignore
- There were some minor HTML errors - no need to go back in and correct them, just take note for reference: milestone-2a.php is missing closing &lt;/body&gt; and &lt;/html&gt; tags. The opening &lt;article&gt; tag on line 21 is out of place.

## Milestone 3 Feeback
This layout should be simple and easy using Bootstrap. If you are still planning on creating a portfolio gallery, you may want to take a look at the [Swipebox](http://brutaldesign.github.io/swipebox/) plugin. 

Good job here, your Milestone 3 passes at Tier III. Go ahead and start development on your PWP. 
