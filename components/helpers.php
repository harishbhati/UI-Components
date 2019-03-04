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
                    <h1 class="page-title">Helpers</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Text Alignment</h3>
                            <p>A class which are used for align text.</p>
                            <p><strong>Output:</strong></p>
                            <div class="medium-spacing border border-black m-tiny text-left">Text Left</div>
                            <div class="medium-spacing border border-black m-tiny text-center">Text Center</div>
                            <div class="medium-spacing border border-black m-tiny text-right">Text Right</div>
                            <div class="medium-spacing border border-black m-tiny text-hide">Text Hidden</div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;text-left&quot;&gt;Text Left&lt;/div&gt;
&lt;div class=&quot;text-center&quot;&gt;Text Center&lt;/div&gt;
&lt;div class=&quot;text-right&quot;&gt;Text Right&lt;/div&gt;
&lt;div class=&quot;text-hide&quot;&gt;Text Hidden&lt;/div&gt;
                        </pre>
                    </div>

                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Block Alignment</h3>
                            <p>A class which are used for align Block of elements.</p>
                            <p><strong>Output:</strong></p>
                            <div class="clear">
                                <span class="medium-spacing border border-black pull-left">Pull Left</span>
                                <span class="medium-spacing border border-black pull-right">Pull Right</span>
                            </div>  
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;clear&quot;&gt;
    &lt;span class=&quot;medium-spacing border border-black pull-left&quot;&gt;Pull Left&lt;/span&gt;
    &lt;span class=&quot;medium-spacing border border-black pull-right&quot;&gt;Pull Right&lt;/span&gt;
&lt;/div&gt; 
                        </pre>
                    </div>

                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Font Size</h3>
                            <p>A class which are used for font size.</p>
                            <p><strong>Output:</strong></p>
                            <ul class="unstyled-list inline-list">
                                <li class="medium-spacing bg-grey-light tiny">Tiny Font</li>
                                <li class="medium-spacing bg-grey-light small">Small Font</li>
                                <li class="medium-spacing bg-grey-light medium">Medium Font</li>
                                <li class="medium-spacing bg-grey-light large">Large Font</li>
                                <li class="medium-spacing bg-grey-light big">Big Font</li>
                                <li class="medium-spacing bg-grey-light huge">Huge Font</li>
                                <li class="medium-spacing bg-grey-light huge-x">Huge-x Font</li>
                            </ul>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;ul class=&quot;unstyled-list inline-list&quot;&gt;
    &lt;li class=&quot;medium-spacing bg-grey-light tiny&quot;&gt;Tiny Font&lt;/li&gt;
    &lt;li class=&quot;medium-spacing bg-grey-light small&quot;&gt;Small Font&lt;/li&gt;
    &lt;li class=&quot;medium-spacing bg-grey-light medium&quot;&gt;Medium Font&lt;/li&gt;
    &lt;li class=&quot;medium-spacing bg-grey-light large&quot;&gt;Large Font&lt;/li&gt;
    &lt;li class=&quot;medium-spacing bg-grey-light big&quot;&gt;Big Font&lt;/li&gt;
    &lt;li class=&quot;medium-spacing bg-grey-light huge&quot;&gt;Huge Font&lt;/li&gt;
    &lt;li class=&quot;medium-spacing bg-grey-light huge-x&quot;&gt;Huge-x Font&lt;/li&gt;
&lt;/ul&gt;
                        </pre>
                    </div>

                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Padding</h3>
                            <p>A class which are used for Space inside block.</p>
                            <p><strong>Output:</strong></p>
                            <ul class="unstyled-list inline-list">
                                <li class="bg-grey-light tiny-spacing">Tiny Spacing</li>
                                <li class="bg-grey-light small-spacing">Small Spacing</li>
                                <li class="bg-grey-light medium-spacing">Medium Spacing</li>
                                <li class="bg-grey-light large-spacing">Large Spacing</li>
                            </ul>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;ul class=&quot;unstyled-list inline-list&quot;&gt;
    &lt;li class=&quot;bg-grey-light tiny-spacing&quot;&gt;Tiny Spacing&lt;/li&gt;
    &lt;li class=&quot;bg-grey-light small-spacing&quot;&gt;Small Spacing&lt;/li&gt;
    &lt;li class=&quot;bg-grey-light medium-spacing&quot;&gt;Medium Spacing&lt;/li&gt;
    &lt;li class=&quot;bg-grey-light large-spacing&quot;&gt;Large Spacing&lt;/li&gt;
&lt;/ul&gt;
                        </pre>
                    </div>

                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Margin</h3>
                            <p>A class which are used for Space outside block.</p>
                            <p><strong>Output:</strong></p>
                            <ul class="unstyled-list inline-list">
                                <li class="tiny-spacing bg-grey-light m-tiny">Tiny Outside Spacing</li>
                                <li class="tiny-spacing bg-grey-light m-small">Small Outside Spacing</li>
                                <li class="tiny-spacing bg-grey-light m-medium">Medium Outside Spacing</li>
                                <li class="tiny-spacing bg-grey-light m-large">Large Outside Spacing</li>
                            </ul>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;ul class=&quot;unstyled-list inline-list&quot;&gt;
    &lt;li class=&quot;tiny-spacing bg-grey-light m-tiny&quot;&gt;Tiny Outside Spacing&lt;/li&gt;
    &lt;li class=&quot;tiny-spacing bg-grey-light m-small&quot;&gt;Small Outside Spacing&lt;/li&gt;
    &lt;li class=&quot;tiny-spacing bg-grey-light m-medium&quot;&gt;Medium Outside Spacing&lt;/li&gt;
    &lt;li class=&quot;tiny-spacing bg-grey-light m-large&quot;&gt;Large Outside Spacing&lt;/li&gt;
&lt;/ul&gt;
                        </pre>
                    </div>

                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Width</h3>
                            <p>A class which are used for Item width.</p>
                            <p><strong>Output:</strong></p>
                            <ul class="unstyled-list inline-list">
                                <li class="tiny-spacing m-tiny bg-grey-light d-block w-auto">Auto Width</li>
                                <li class="tiny-spacing m-tiny bg-grey-light d-block w-25">25% Width</li>
                                <li class="tiny-spacing m-tiny bg-grey-light d-block w-50">50% Width</li>
                                <li class="tiny-spacing m-tiny bg-grey-light d-block w-75">75% Width</li>
                                <li class="tiny-spacing m-tiny bg-grey-light d-block w-100">100% Width</li>
                            </ul>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;ul class=&quot;unstyled-list inline-list&quot;&gt;
    &lt;li class=&quot;tiny-spacing m-tiny bg-grey-light d-block w-auto&quot;&gt;Auto Width&lt;/li&gt;
    &lt;li class=&quot;tiny-spacing m-tiny bg-grey-light d-block w-25&quot;&gt;25% Width&lt;/li&gt;
    &lt;li class=&quot;tiny-spacing m-tiny bg-grey-light d-block w-50&quot;&gt;50% Width&lt;/li&gt;
    &lt;li class=&quot;tiny-spacing m-tiny bg-grey-light d-block w-75&quot;&gt;75% Width&lt;/li&gt;
    &lt;li class=&quot;tiny-spacing m-tiny bg-grey-light d-block w-100&quot;&gt;100% Width&lt;/li&gt;
&lt;/ul&gt;
                        </pre>
                    </div>
                </section>
            </section>
        </main>
        <?php include 'footer.php'; ?>
        <?php include 'script.php'; ?>
    </body>
</html>