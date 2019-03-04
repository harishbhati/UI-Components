<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body class="inner-scroll">
        <?php include 'header.php'; ?>
        <section>
        <section class="sidebar-content-holder sidebar-left">
            <?php include 'sidebar.php'; ?>
            <main class="content nicescroll-block">
            <div class="page-title-block">
                <h1 class="page-title">Installation</h1>
            </div>
                <section class="large-spacing">
                    <p>There are 2 ways to get started with WebUIKit framework in your projects. You can either install manually, from CDN or clone from github.</p>
                    <h3>Install from CDN</h3>
                    <p>You can use the cdn to load compiled webuikit.css.</p>
                    <pre class="markup">&lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/harishbhati/WebUIkit@1.0/dist/css/main.css"&gt;</pre>

                    <h3>Download</h3>
                    <p>You have the following steps to download WebUIkit</p>
                    <ul>
                        <li>Open command Prompt</li>
                        <li>Clone the repo to get all source files.</li>
                    </ul>
                    <pre class="markup">git clone https://github.com/harishbhati/WebUIkit.git</pre>
                    <h3>Browser Support</h3>
                    <p>WebUIKit uses Mixins to make most styles compatible with earlier browsers and Reset.css for CSS resets. WebUIKit is designed for modern browsers. For best compatibility, these browsers are recommended:</p>
                    <ul>
                        <li>Chrome</li>
                        <li>Microsoft Edge</li>
                        <li>Firefox</li>
                        <li>Safari</li>
                        <li>Opera</li>
                        <li>Internet Explorer 10+</li>
                    </ul>
                    <p>Spectre supports Internet Explorer 10+, but some HTML5 and CSS3 features are not perfectly supported by Internet Explorer.</p>
                <h3>HTML Starter Template</h3>
                <p>Start with this HTML template and adapt it to your needs.Be sure to include the .no-js class on the html tag of your template. Adding this class prevents flash of unstyled content for a number of foundation components.</p>
                <pre class="markup">
&lt;!doctype html&gt;
&lt;html class=&quot;no-js&quot; lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot; /&gt;
    &lt;meta http-equiv=&quot;x-ua-compatible&quot; content=&quot;ie=edge&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot; /&gt;
    &lt;title&gt;Foundation Starter Template&lt;/title&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;css/webuikit.min.css&quot; /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;
    &lt;script src=&quot;js/webuikit.min.js&quot;&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
                </pre>
             </section>
             </section>
        </main>
        </section>
        <?php include 'footer.php'; ?>
        <?php include 'script.php'; ?>
    </body>
</html>