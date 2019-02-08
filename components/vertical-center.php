<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <section>
        <?php include 'sidebar.php'; ?>
            <main class="content">
                <div class="page-title-block">
                    <h1 class="page-title">Vertical Center</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Center Position</h3>
                            <p>This is one of the first, and still a go-to, for many developers. A simple trick, relying on absolute positioning the inner element at 50% from the top of their parent, then translating it up 50% of its height</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <div class="v-center-position parent h-25 border border-orange">
                                    <h2 class="children">Vertical Center Item</h2>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;div class=&quot;v-center-position parent h-25 border border-orange&quot;&gt;
        &lt;h2 class=&quot;children&quot;&gt;Vertical Center Item&lt;/h2&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Center Table</h3>
                            <p>A really simple approach and one of the first which is using the behaviour of table cells and vertical-align to center an element on the container.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <div class="v-center-table parent h-25 border border-orange">
                                    <h2 class="children">Vertical Center Item</h2>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;div class=&quot;v-center-table parent h-25 border border-orange&quot;&gt;
        &lt;h2 class=&quot;children&quot;&gt;Vertical Center Item&lt;/h2&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Center Flex</h3>
                            <p>Flexbox also introduced really great alignment properties.This allows us to control how items are placed and how empty space is distributed</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <div class="v-center-flex parent h-25 border border-orange">
                                    <h2 class="children">Vertical Center Item</h2>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;div class=&quot;v-center-flex parent h-25 border border-orange&quot;&gt;
        &lt;h2 class=&quot;children&quot;&gt;Vertical Center Item&lt;/h2&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Ghost Element Method</h3>
                            <p>It is using inline-block with a ghost (pseudo) element that has 100% height of the parent, then setting the vertical-align property to middle</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <div class="v-center-inline parent h-25 border border-orange">
                                    <h2 class="children">Vertical Center Item</h2>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;div class=&quot;v-center-inline parent h-25 border border-orange&quot;&gt;
        &lt;h2 class=&quot;children&quot;&gt;Vertical Center Item&lt;/h2&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Center Grid</h3>
                            <p>Grid includes pretty much the same alignment options as flexbox, so we can use it on the grid-container</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <div class="v-center-grid parent h-25 border border-orange">
                                    <h2 class="children">Vertical Center Item</h2>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;div class=&quot;v-center-grid parent h-25 border border-orange&quot;&gt;
        &lt;h2 class=&quot;children&quot;&gt;Vertical Center Item&lt;/h2&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    </div>
                </section>
            </main>
    </body>
</html>