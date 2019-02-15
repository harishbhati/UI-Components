<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <section>
            <?php include 'sidebar.php'; ?>
            <main class="content">
            <div class="page-title-block">
                <h1 class="page-title">Introduction</h1>
            </div>
                <section class="large-spacing">
                    <h3>Overview</h3>
                    <p><strong>A complete solution:</strong> WebUIKit is a complete CSS framework that is production ready out of the box.  There is no need to customize the CSS if you don’t want to because it is head and shoulders
                     above others in terms of the way that it looks.  We think it looks great and hope you do too.</p>
                     <p><strong>Minimal CSS:</strong> This entire site was created with an attempt to only use the CSS provided by Web UIKit.  The additions made via custom css were minimal.  That’s an impressive feat considering that 
                     the entire framework comes in at <strong>8kb</strong> when gzipped.</p>
                     <p><strong>Community driven:</strong> WebUIKit is created as a free open source framework. You are invited to contribute to the source 
                     by getting involved on <a href="https://github.com/harishbhati/UI-Components">GitHub</a> .</p>
                     <p>Alternatively, you can use either cdnjs to import mini.css into your HTML page's <head> tag:</p>
                     <pre class="markup">&lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/harishbhati/WebUIkit@1.0/dist/css/main.css"&gt;</pre>
                     <p>After adding mini.css to your project, remember to also add the following line inside your HTML page's <head> tag to utilize the viewport meta tag:</p>
                     <pre class="markup">&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</pre>
                </section>
                <section class="large-spacing">
                    <h3>Structure</h3>
                    <p>WebUIKit includes a directory structure that separates the CSS framework into modules which are included from a global file. 
                        This allows you to pick and choose what you'd like to include into your project or just pull in everything.</p>
                    <pre class="markup">
                        <code class="code">WebUIKit/
                            ├── components/
                            ├── dist/
                            |   └── css/
                            |       └── webuikit.min.css
                            |   └── js/
                            |       └── webuikit.js
                            └── src/
                                └── scss/
                                    |
                                    ├── elements/
                                    ├── layout/
                                    ├── mixins/
                                    ├── vars/
                                    └── webuikit.scss
                        </code>
                    </pre>
                </section>
            </main>
        </section>
        <?php include 'footer.php'; ?>
        <?php include 'script.php'; ?>
    </body>
</html>