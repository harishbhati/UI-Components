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
                        <h1 class="page-title">Sidebar Block</h1>
                    </div>
                    <section class="medium-spacing">
                        <div class="large-spacing">
                            <div class="outputs">
                                <h3>Sidebar Left</h3>
                                <p>A Sidebar which is placed left side of page.</p>
                                <p><strong>Output:</strong></p>
                                <div class="container-fluid">
                                    <section class="sidebar-holder sidebar-content-holder sidebar-left box-shadow">
                                        <aside class="sidebar">
                                            <span class="collapse-menu icon-menu font-x2">
                                            </span>
                                            <input type="checkbox" class="menu-checkbox">
                                            <ul class="unstyled-list item">
                                                <li class="item-header">Getting started</li>
                                                <li><a href="introduction.php">Introduction</a></li>
                                                <li><a href="installation.php">Installation</a></li>
                                            </ul>
                                            <ul class="unstyled-list item">
                                                <li class="item-header">Usage</li>
                                                <li><a href="">Layouts</a></li>
                                                <li><a href="">Themes</a></li>
                                            </ul>
                                            <ul class="unstyled-list item">
                                                <li class="item-header">Global CSS</li>
                                                <li><a href="reset.php">Reset</a></li>
                                                <li><a href="helpers.php">Helpers</a></li>
                                            </ul>
                                            <ul class="unstyled-list item">
                                                <li class="item-header">Elements</li>
                                                <li><a href="container.php">Container</a></li>
                                                <li><a href="background-color.php">Background Color</a></li>
                                                <li><a href="color.php">Color</a></li>
                                                <li><a href="">Transitions</a></li>
                                                <li><a href="vertical-center.php">Vertical Center</a></li>
                                                <li><a href="buttons.php">Button</a></li>
                                                <li><a href="border.php">Border</a></li>
                                                <li><a href="">Inputs &amp; Label</a></li>
                                                <li><a href="">Divider</a></li>
                                                <li><a href="list.php">Lists</a></li>
                                                <li><a href="">Images</a></li>
                                                <li><a href="image-gallery.php">Image Gallery</a></li>
                                                <li><a href="parallax.php">Parallax</a></li>
                                                <li><a href="selection.php">Selection</a></li>
                                            </ul>
                                        </aside>
                                        <main class="content small-spacing">
                                            <p>A admin content Description area.</p>
                                        </main>
                                    </section>
                                </div>
                            </div>
                        </div>
                            <p><strong>Code Example:</strong></p>
                            <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;section class=&quot;sidebar-content-holder sidebar-left box-shadow&quot;&gt;
        &lt;aside class=&quot;sidebar&quot;&gt;
            &lt;ul class=&quot;unstyled-list item&quot;&gt;
                &lt;li class=&quot;item-header&quot;&gt;Getting started&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;introduction.php&quot;&gt;Introduction&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;installation.php&quot;&gt;Installation&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;ul class=&quot;unstyled-list item&quot;&gt;
                &lt;li class=&quot;item-header&quot;&gt;Usage&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;&quot;&gt;Layouts&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;&quot;&gt;Themes&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;ul class=&quot;unstyled-list item&quot;&gt;
                &lt;li class=&quot;item-header&quot;&gt;Global CSS&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;reset.php&quot;&gt;Reset&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;helpers.php&quot;&gt;Helpers&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;ul class=&quot;unstyled-list item&quot;&gt;
                &lt;li class=&quot;item-header&quot;&gt;Elements&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;container.php&quot;&gt;Container&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;background-color.php&quot;&gt;Background Color&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;color.php&quot;&gt;Color&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;&quot;&gt;Transitions&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;vertical-center.php&quot;&gt;Vertical Center&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;buttons.php&quot;&gt;Button&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;border.php&quot;&gt;Border&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;&quot;&gt;Inputs &amp;amp; Label&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;&quot;&gt;Divider&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;list.php&quot;&gt;Lists&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;&quot;&gt;Images&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;image-gallery.php&quot;&gt;Image Gallery&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;parallax.php&quot;&gt;Parallax&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;selection.php&quot;&gt;Selection&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/aside&gt;
        &lt;main class=&quot;content small-spacing&quot;&gt;
            &lt;p&gt;A admin content Description area.&lt;/p&gt;
        &lt;/main&gt;
    &lt;/section&gt;
&lt;/div&gt;
                            </pre>
                        </div>

                        <div class="outputs">
                                <h3>Sidebar Left</h3>
                                <p>A Sidebar which is placed right side of page.</p>
                                <p><strong>Output:</strong></p>
                                <div class="container-fluid">
                                    <section class="sidebar-content-holder sidebar-right box-shadow">
                                        <aside class="sidebar">
                                            <ul class="unstyled-list item">
                                                <li class="item-header">Getting started</li>
                                                <li><a href="introduction.php">Introduction</a></li>
                                                <li><a href="installation.php">Installation</a></li>
                                            </ul>
                                            <ul class="unstyled-list item">
                                                <li class="item-header">Usage</li>
                                                <li><a href="">Layouts</a></li>
                                                <li><a href="">Themes</a></li>
                                            </ul>
                                            <ul class="unstyled-list item">
                                                <li class="item-header">Global CSS</li>
                                                <li><a href="reset.php">Reset</a></li>
                                                <li><a href="helpers.php">Helpers</a></li>
                                            </ul>
                                            <ul class="unstyled-list item">
                                                <li class="item-header">Elements</li>
                                                <li><a href="container.php">Container</a></li>
                                                <li><a href="background-color.php">Background Color</a></li>
                                                <li><a href="color.php">Color</a></li>
                                                <li><a href="">Transitions</a></li>
                                                <li><a href="vertical-center.php">Vertical Center</a></li>
                                                <li><a href="buttons.php">Button</a></li>
                                                <li><a href="border.php">Border</a></li>
                                                <li><a href="">Inputs &amp; Label</a></li>
                                                <li><a href="">Divider</a></li>
                                                <li><a href="list.php">Lists</a></li>
                                                <li><a href="">Images</a></li>
                                                <li><a href="image-gallery.php">Image Gallery</a></li>
                                                <li><a href="parallax.php">Parallax</a></li>
                                                <li><a href="selection.php">Selection</a></li>
                                            </ul>
                                        </aside>
                                        <main class="content small-spacing">
                                            <p>A admin content Description area.</p>
                                        </main>
                                    </section>
                                </div>
                            </div>
                        </div>
                            <p><strong>Code Example:</strong></p>
                            <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;section class=&quot;sidebar-content-holder sidebar-right box-shadow&quot;&gt;
        &lt;aside class=&quot;sidebar&quot;&gt;
            &lt;ul class=&quot;unstyled-list item&quot;&gt;
                &lt;li class=&quot;item-header&quot;&gt;Getting started&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;introduction.php&quot;&gt;Introduction&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;installation.php&quot;&gt;Installation&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;ul class=&quot;unstyled-list item&quot;&gt;
                &lt;li class=&quot;item-header&quot;&gt;Usage&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;&quot;&gt;Layouts&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;&quot;&gt;Themes&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;ul class=&quot;unstyled-list item&quot;&gt;
                &lt;li class=&quot;item-header&quot;&gt;Global CSS&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;reset.php&quot;&gt;Reset&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;helpers.php&quot;&gt;Helpers&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;ul class=&quot;unstyled-list item&quot;&gt;
                &lt;li class=&quot;item-header&quot;&gt;Elements&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;container.php&quot;&gt;Container&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;background-color.php&quot;&gt;Background Color&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;color.php&quot;&gt;Color&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;&quot;&gt;Transitions&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;vertical-center.php&quot;&gt;Vertical Center&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;buttons.php&quot;&gt;Button&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;border.php&quot;&gt;Border&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;&quot;&gt;Inputs &amp;amp; Label&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;&quot;&gt;Divider&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;list.php&quot;&gt;Lists&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;&quot;&gt;Images&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;image-gallery.php&quot;&gt;Image Gallery&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;parallax.php&quot;&gt;Parallax&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;selection.php&quot;&gt;Selection&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/aside&gt;
        &lt;main class=&quot;content small-spacing&quot;&gt;
            &lt;p&gt;A admin content Description area.&lt;/p&gt;
        &lt;/main&gt;
    &lt;/section&gt;
&lt;/div&gt;
                            </pre>
                        </div>
                    </section>
                </main>
            </section>
        </section>
        <?php include 'footer.php'; ?>
        <?php include 'script.php'; ?>
    </body>
</html>