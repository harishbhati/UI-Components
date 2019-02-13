<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <section>
        <?php include 'sidebar.php'; ?>
            <main class="content">
                <div class="page-title-block">
                    <h1 class="page-title">Navbar</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Basic Navbar</h3>
                            <p>A navigation bar is basically a list of links.</p>
                            <p><strong>Output:</strong></p>
                            <nav  class="navbar">
                                <ul class="nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;nav  class=&quot;navbar&quot;&gt;
    &lt;ul class=&quot;nav&quot;&gt;
        &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Navbar Links Background</h3>
                            <p>A navigation bar links have background color on active link.</p>
                            <p><strong>Output:</strong></p>
                            <nav  class="navbar">
                                <ul class="nav background-nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;nav  class=&quot;nav background-nav&quot;&gt;
    &lt;ul class=&quot;nav&quot;&gt;
        &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Navbar Links Border Bottom</h3>
                            <p>A navigation bar links have border bottom on active and hover.</p>
                            <p><strong>Output:</strong></p>
                            <nav  class="navbar">
                                <ul class="nav border-nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;nav  class=&quot;nav border-nav&quot;&gt;
    &lt;ul class=&quot;nav&quot;&gt;
        &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Navbar Links Border</h3>
                            <p>A navigation bar links have border on active and hover.</p>
                            <p><strong>Output:</strong></p>
                            <nav  class="navbar">
                                <ul class="nav borderall-nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;nav  class=&quot;nav borderall-nav&quot;&gt;
    &lt;ul class=&quot;nav&quot;&gt;
        &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
                        </pre>
                    </div>
                </section>
            </main>
        </section>
    <?php include 'script.php'; ?>
    </body>
</html>