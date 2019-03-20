<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    
    <?php
        $page_title = "GMLsnip | Frequently Asked Questions";
        include "../php/header.php"
    ?>

    <body>

    <?php include "../php/nav.php" ?>
    
    <div class="container">
        <h1>GMLsnip FAQ</h1>
        <p>This page answers questions you may have surrounding <a href="/" title="GMLsnip">GMLsnip</a> and the tools it offers.</p>

        <hr />

        <h2 class="question">What is GMLsnip?</h2>
        <p class="answer">GMLsnip.com allows GameMaker developers to generate stylized GameMaker Language code snippets they can put on their own websites.</p>

        <h2 class="question">Why did you make GMLsnip?</h2>
        <p class="answer">My name is <a href="https://www.zackbanack.com" title="Zack Banack">Zack Banack</a> and I've been making games for over a decade. This tool was originally going to be exclusive to <a href="http://thestepevent.com" title="The Step Event">The Step Event</a>, an educational GameMaker side project of mine. But, I quickly realized a lot of people could get use out of a utility like this.
        </p>

        <h2 class="question">Why is this free?</h2>
        <p class="answer">I'm keeping GMLsnip free because I believe in free coding resources. My mission of The Step Event is to create the tutorials and resources I wish I had when I was new to game development. Plus, the GameMaker community is a small and tight-knit one.</p>

        <h2 class="question">How can I support GMLsnip?</h2>
        <p class="answer">If you want to support this project, you can disable ad blocking software for this page. If you're feeling highly generous, you can <a href="https://paypal.me/zackbanack">make a donation</a>. Donations are completely optional but highly appreciated!</p>

        <h2 class="question">Where do I install the Google Chrome browser extension or Mozilla Firefox addon?</h2>
        <p class="answer">You can get GMLsnip on your desktop Google Chrome browser via the <a href="https://chrome.google.com/webstore/detail/gml-syntax-highlighter/ooagiaejlpeookdifcncgcdphmbhpfjn/related">Chrome web store</a>. For Firefox users, check out the <a href="https://addons.mozilla.org/en-US/firefox/addon/gml-syntax-highlighter/">this link</a>.</p>

        <h2 class="question">What does the browser extension do?</h2>
        <p class="answer">Using the (optional) browser extension, you'll be able GameMaker Language code written in your browser just as you would in the Studio IDE. Transform dull GML code into pretty-printed, colorful code snippets across the web. Add a coat of fresh paint to the /r/gamemaker, the YoYo Games Forum, and the official GameMaker docs.</p>


        <h2 class="question">Why am I getting a message saying I need JavaScript?</h2>
        <p class="answer">GMLsnip needs JavaScript in order to make sense of the GML code you input. It runs a lexer, something that tokenizes (categorizes), strings of text. That's how this tool is able to distinguish variables from functions and numbers from strings. Fortunately, after the code snippet is generated, JavaScript is no longer needed.</p>


        <h2 class="question">Why doesn't my code look right?</h2>
        <p class="answer">There may be syntax edge-cases. Also, this utility is not a code validator nor a linter.</p>


        <h2 class="question">Why is the code so big?</h2>
        <p class="answer">Because the snippets generated by GMLsnip do not require JavaScript, they cannot be pretty-printed on the fly. While this means they're viewable to a larger percentage of the internet, it comes at the expense of being more bloated. The elements in the HTML, CSS, and clipboard script are named the way they are as to have a slim-to-none chance of interferring with anything else on your website. Overkill? Probably.</p>


        <h2 class="question">Why isn't the clipboard working?</h2>
        <p class="answer">While most modern JavaScript-enabled browsers should be able to copy the content via the clipboard button, some (notably, mobile) still fail. Luckily, the code can be manually highlighted and either right-click -> copy'd or ctrl/command + c'd.</p>


        <h2 class="question">Can I remove the attributions and credit in the code?</h2>
        <p class="answer">I highly encourage you to keep the credits and link back to <a href="https://www.GMLsnip.com" title="GMLsnip.com">GMLsnip.com</a> in the code that's generated on this website. If you <i>must</i> remove the credits, then please consider making a donation above as compensation.</p>


        <h2 class="question">Is GMLsnip affiliated with YoYo Games or GameMaker?</h2>
        <p class="answer">No. This website is not &mdash; nor does it claim to be &mdash; affiliated with YoYo Games Ltd., GameMaker: Studio, GameMaker Studio 2, or any related products.</p>


        <h2 class="question">Will my snippets still work if GMLsnip.com goes down?</h2>
        <p class="answer">Yes! Once you copy and paste the code from this website onto yours, it's completely independent from GMLsnip.com.</p>


        <h2 class="question">The code snippet looks different on my website. Why?</h2>
        <p class="answer">Your website's CSS or rules may be overriding GMLsnip's styling. Look for "!important".</p>


        <h2 class="question">Is this project open source?</h2>
            <ul class="answer">
                <li>The repo associated with this website is the <a href="https://github.com/zbanack/GMLsnip" title="GMLsnip Github repo">GMLsnip Github repo</a>.</li>
            <li>The browser extension/addon code can be found on the <a href="https://github.com/zbanack/GMLsnip-Addon" title="GMLsnip-Addon repo">GMLsnip-Addon repo</a>.</li>
            <li><a href="https://github.com/zbanack/gml_syntax" title="gml_syntax Githubrepo">gml_syntax</a> is my JavaScript syntax parser for the GameMaker Language.</li>
            <li><a href="https://github.com/zbanack/GameMaker-Language-Functions" title="GameMaker Language Functions Github repo">GameMaker Language Functions</a> is a comprehensive, unofficial digest of every single GM8, GMS1, and GMS2 function.</li>
        </ul>


        <h2 class="question">Can I edit the code this website generates?</h2>
        <p class="answer">You can do with this code as you please, bearing in mind the aforementioned attribution clause. But, if you edit the code, I won't be able to help you if something breaks.</p>

        <h2 class="question">Can we affiliate?</h2>
        <p class="answer">For questions regarding affiliation, please <a href="https://www.zackbanack.com/contact" title="Contact Zack Banack">contact me</a>.</p>
    </div>

    </body>
</html>