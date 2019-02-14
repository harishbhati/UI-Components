<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <section>
        <?php include 'sidebar.php'; ?>
            <main class="content">
                <div class="page-title-block">
                    <h1 class="page-title">Containers</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <p>A container is an element designed to contain page elements to a reasonable maximum width based on the size of a user's screen.
                            This size is calculated programmatically by determining the maximum device width available within a device breakpoint, given a desired minimum gutter size.
                            We are basically used two type of containers Fixed width and Full width.
                            </p>
                        </div>
                        <div class="outputs">
                            <h3>Fixed Width Container</h3>
                            <p>A class 'container-fixed' are used for applying fixed width container.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <ul class="unstyled-list inline-list">
                                    <li class="m-tiny medium-spacing bg-grey">Fixed Container</li>
                                    <li class="m-tiny medium-spacing bg-grey">Fixed Container</li>
                                    <li class="m-tiny medium-spacing bg-grey">Fixed Container</li>
                                    <li class="m-tiny medium-spacing bg-grey">Fixed Container</li>
                                    <li class="m-tiny medium-spacing bg-grey">Fixed Container</li>
                                    <li class="m-tiny medium-spacing bg-grey">Fixed Container</li>
                                </ul>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;ul class=&quot;unstyled-list inline-list&quot;&gt;
        &lt;li class=&quot;m-tiny medium-spacing bg-grey&quot;&gt;Fixed Container&lt;/li&gt;
        &lt;li class=&quot;m-tiny medium-spacing bg-grey&quot;&gt;Fixed Container&lt;/li&gt;
        &lt;li class=&quot;m-tiny medium-spacing bg-grey&quot;&gt;Fixed Container&lt;/li&gt;
        &lt;li class=&quot;m-tiny medium-spacing bg-grey&quot;&gt;Fixed Container&lt;/li&gt;
        &lt;li class=&quot;m-tiny medium-spacing bg-grey&quot;&gt;Fixed Container&lt;/li&gt;
        &lt;li class=&quot;m-tiny medium-spacing bg-grey&quot;&gt;Fixed Container&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
                        </pre>
                    </div>

                    <div class="outputs">
                            <h3>Full Width Container</h3>
                            <p>A class 'container-fluid' are used for applying full width container.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <ul class="unstyled-list inline-list">
                                    <li class="m-tiny medium-spacing bg-grey">Full Container</li>
                                    <li class="m-tiny medium-spacing bg-grey">Full Container</li>
                                    <li class="m-tiny medium-spacing bg-grey">Full Container</li>
                                    <li class="m-tiny medium-spacing bg-grey">Full Container</li>
                                    <li class="m-tiny medium-spacing bg-grey">Full Container</li>
                                    <li class="m-tiny medium-spacing bg-grey">Full Container</li>
                                </ul>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;ul class=&quot;unstyled-list inline-list&quot;&gt;
        &lt;li class=&quot;m-tiny medium-spacing bg-grey&quot;&gt;Full Container&lt;/li&gt;
        &lt;li class=&quot;m-tiny medium-spacing bg-grey&quot;&gt;Full Container&lt;/li&gt;
        &lt;li class=&quot;m-tiny medium-spacing bg-grey&quot;&gt;Full Container&lt;/li&gt;
        &lt;li class=&quot;m-tiny medium-spacing bg-grey&quot;&gt;Full Container&lt;/li&gt;
        &lt;li class=&quot;m-tiny medium-spacing bg-grey&quot;&gt;Full Container&lt;/li&gt;
        &lt;li class=&quot;m-tiny medium-spacing bg-grey&quot;&gt;Full Container&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    </div>
                </section>
            </main>
        <?php include 'footer.php'; ?>
        <?php include 'script.php'; ?>
    </body>
</html>