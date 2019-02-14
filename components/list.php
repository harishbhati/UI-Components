<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <section>
        <?php include 'sidebar.php'; ?>
            <main class="content">
                <div class="page-title-block">
                    <h1 class="page-title">Lists</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Unstyle Lists</h3>
                            <p>A list items will not marked with bullets.</p>
                            <p><strong>Output:</strong></p>
                            <ul class="unstyled-list">
                                <li class="">Item 1</li>
                                <li class="">Item 2</li>
                                <li class="">Item 3</li>
                                <li class="">Item 4</li>
                                <li class="">Item 5</li>
                            </ul>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;ul class=&quot;unstyled-list&quot;&gt;
    &lt;li class=&quot;&quot;&gt;Item 1&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 2&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 3&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 4&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 5&lt;/li&gt;
&lt;/ul&gt;
                        </pre>
                    </div>

                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Inline Lists</h3>
                            <p>A list where all item coming in a single row.</p>
                            <p><strong>Output:</strong></p>
                            <ul class="inline-list">
                                <li class="">Item 1</li>
                                <li class="">Item 2</li>
                                <li class="">Item 3</li>
                                <li class="">Item 4</li>
                                <li class="">Item 5</li>
                            </ul>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;ul class=&quot;inline-list&quot;&gt;
    &lt;li class=&quot;&quot;&gt;Item 1&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 2&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 3&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 4&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 5&lt;/li&gt;
&lt;/ul&gt;
                        </pre>
                    </div>
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Diamond List</h3>
                            <p>A list where all item icon look like diamond.</p>
                            <p><strong>Output:</strong></p>
                            <ul class="unstyled-list diamond-list">
                                <li class="">Item 1</li>
                                <li class="">Item 2</li>
                                <li class="">Item 3</li>
                                <li class="">Item 4</li>
                                <li class="">Item 5</li>
                            </ul>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;ul class=&quot;unstyled-list diamond-list&quot;&gt;
    &lt;li class=&quot;&quot;&gt;Item 1&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 2&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 3&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 4&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 5&lt;/li&gt;
&lt;/ul&gt;
                        </pre>
                    </div>

                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Checked List</h3>
                            <p>A list where all item icon look like checked.</p>
                            <p><strong>Output:</strong></p>
                            <ul class="unstyled-list checked-list">
                                <li class="">Item 1</li>
                                <li class="">Item 2</li>
                                <li class="">Item 3</li>
                                <li class="">Item 4</li>
                                <li class="">Item 5</li>
                            </ul>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;ul class=&quot;unstyled-list checked-list&quot;&gt;
    &lt;li class=&quot;&quot;&gt;Item 1&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 2&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 3&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 4&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 5&lt;/li&gt;
&lt;/ul&gt;
                        </pre>
                    </div>

                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Arrow List</h3>
                            <p>A list where all item icon look like arrow.</p>
                            <p><strong>Output:</strong></p>
                            <ul class="unstyled-list arrow-list">
                                <li class="">Item 1</li>
                                <li class="">Item 2</li>
                                <li class="">Item 3</li>
                                <li class="">Item 4</li>
                                <li class="">Item 5</li>
                            </ul>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;ul class=&quot;unstyled-list arrow-list&quot;&gt;
    &lt;li class=&quot;&quot;&gt;Item 1&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 2&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 3&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 4&lt;/li&gt;
    &lt;li class=&quot;&quot;&gt;Item 5&lt;/li&gt;
&lt;/ul&gt;
                        </pre>
                    </div>
                </section>
            </main>
        <?php include 'footer.php'; ?>
        <?php include 'script.php'; ?>
    </body>
</html>