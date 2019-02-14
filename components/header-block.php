<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <section>
        <?php include 'sidebar.php'; ?>
            <main class="content">
                <div class="page-title-block">
                    <h1 class="page-title">Header Block</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Basic Header</h3>
                            <p>A header is basically a group of logo and navbars.</p>
                            <p><strong>Output:</strong></p>
                            <header class="header deepspace">
                                <div class="container-fluid">
                                    <div class="header-inner-holder text-white">
                                        <a class="logo text-white" href="#">
                                            <h2 class="logo-name m-0">Logo</h2>
                                        </a>
                                        <nav  class="navbar">
                                            <ul class="nav horizontal">
                                                <li class="active"><a href="#">Home</a></li>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Portfolio</a></li>
                                                <li><a href="#">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </header>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;header class=&quot;header deepspace&quot;&gt;
    &lt;div class=&quot;container-fluid&quot;&gt;
        &lt;div class=&quot;header-inner-holder text-white&quot;&gt;
            &lt;a class=&quot;logo text-white&quot; href=&quot;#&quot;&gt;
                &lt;h2 class=&quot;logo-name m-0&quot;&gt;Logo&lt;/h2&gt;
            &lt;/a&gt;
            &lt;nav  class=&quot;navbar&quot;&gt;
                &lt;ul class=&quot;nav horizontal&quot;&gt;
                    &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/nav&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Header center Logo</h3>
                            <p>A header which have two navbar, firts in left, second in right and logo have placed in center.</p>
                            <p><strong>Output:</strong></p>
                            <header class="header greytoolive">
                                <div class="container-fluid">
                                    <div class="header-inner-holder text-white">
                                    <nav  class="navbar">
                                            <ul class="nav horizontal">
                                                <li class="active"><a href="#">Home</a></li>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Gallery</a></li>
                                            </ul>
                                        </nav>
                                        <a class="logo text-white" href="#">
                                            <h2 class="logo-name m-0">Logo</h2>
                                        </a>
                                        <nav  class="navbar">
                                            <ul class="nav horizontal">
                                                <li><a href="#">Our Team</a></li>
                                                <li><a href="#">Portfolio</a></li>
                                                <li><a href="#">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </header>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;header class=&quot;header greytoolive&quot;&gt;
    &lt;div class=&quot;container-fluid&quot;&gt;
        &lt;div class=&quot;header-inner-holder text-white&quot;&gt;
        &lt;nav  class=&quot;navbar&quot;&gt;
                &lt;ul class=&quot;nav horizontal&quot;&gt;
                    &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Gallery&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/nav&gt;
            &lt;a class=&quot;logo text-white&quot; href=&quot;#&quot;&gt;
                &lt;h2 class=&quot;logo-name m-0&quot;&gt;Logo&lt;/h2&gt;
            &lt;/a&gt;
            &lt;nav  class=&quot;navbar&quot;&gt;
                &lt;ul class=&quot;nav horizontal&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Our Team&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/nav&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;
                        </pre>
                    </div>
                </section>
            </main>
        </section>
    <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>
    </body>
</html>