<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <section>
        <?php include 'sidebar.php'; ?>
            <main class="content">
                <div class="page-title-block">
                    <h1 class="page-title">Flex</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <p>To start using the Flexbox model, you need to first define a flex container. 
                                It could offer space distribution between items in an interface and powerful alignment capabilities.
                            </p>
                        </div>
                        <div class="outputs">
                            <h3>Flex Container</h3>
                            <p>The flex container becomes flexible by setting the display property.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="flex">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;flex-container&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Flexbox Horizontal Alignment</h3>
                            <p>it is used for aligned items horizontaly.</p>
                            <h4>Flex Start</h4>
                            <p>The flexbox/grid items are pushed towards the start of the container's main axis.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="flex flex-start">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;flex flex-start&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                        <div class="outputs">
                            <h4>Flex Center</h4>
                            <p>The flexbox/grid items are centered along the container's main axis.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="flex flex-center">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;flex flex-center&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                        <div class="outputs">
                            <h4>Flex Right</h4>
                            <p>The flexbox/grid items are pushed towards the end of the container's main axis.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="flex flex-right">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;flex flex-right&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                        <div class="outputs">
                            <h4>Space Between</h4>
                            <p>The remaining space is distributed between the flexbox/grid items.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="flex flex-between">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;flex flex-between&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                        <div class="outputs">
                            <h4>Space Around</h4>
                            <p>The remaining space is distributed around the flexbox/grid items: this adds space before the first item and after the last one.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="flex flex-around">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;flex flex-around&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                        <div class="outputs">
                            <h3>Flexbox Vertical Alignment</h3>
                            <p>it is used for aligned items verticaly.</p>
                            <h4>Flex Stretch</h4>
                            <p>The flexbox items will stretch across the whole cross axis.By default, the cross axis is vertical. This means the flexbox items will fill up the whole vertical space.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="flex flex-stretch">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="large-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;flex flex-stretch&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;large-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                        <div class="outputs">
                            <h4>Flex Top</h4>
                            <p>The flexbox items are aligned at the start of the cross axis.By default, the cross axis is vertical. This means the flexbox items will be aligned vertically at the top.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="flex flex-top">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="large-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;flex flex-top&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;large-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                        <div class="outputs">
                            <h4>Flex Middle</h4>
                            <p>The flexbox items are aligned at the center of the cross axis.By default, the cross axis is vertical. This means the flexbox items will be centered vertically.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="flex flex-middle">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="large-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;flex flex-middle&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;large-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                        <div class="outputs">
                            <h4>Flex Baseline</h4>
                            <p>The flexbox items are aligned at the baseline of the cross axis.By default, the cross axis is vertical. This means the flexbox items will align themselves in order to have the baseline of their text align along a horizontal line.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="flex flex-baseline">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="large-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;flex flex-middle&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;large-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                        <div class="outputs">
                            <h4>Flex Bottom</h4>
                            <p>The flexbox items are aligned at the end of the cross axis.By default, the cross axis is vertical. This means the flexbox items will be aligned vertically at the bottom.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="flex flex-bottom">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="large-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;flex flex-bottom&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;large-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                        <div class="outputs">
                            <h3>Flexbox Row</h3>
                            <p>Defines if flexbox items appear on a single line or on multiple lines within a flexbox container.</p>
                            <h4>Flex Nowrap</h4>
                            <p>The flexbox items will remain on a single line, no matter what, and will eventually overflow if needed.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <div class="flex flex-nowrap">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 4</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 5</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 6</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 7</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 8</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 9</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 10</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 11</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 12</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 13</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 14</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;div class=&quot;flex flex-nowrap&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                        <div class="outputs">
                            <h4>Flex Wrap</h4>
                            <p>The flexbox items will be distributed among multiple lines if needed.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <div class="flex flex-wrap">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 4</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 5</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 6</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 7</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 8</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 9</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 10</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 11</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 12</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 13</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 14</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;div class=&quot;flex flex-wrap&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                        <div class="outputs">
                            <h4>Flex Wrap Reverse</h4>
                            <p>The flexbox items will be distributed among multiple lines if needed. Any additional line will appear before the previous one</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <div class="flex flex-wrap-reverse">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 4</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 5</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 6</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 7</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 8</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 9</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 10</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 11</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 12</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 13</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 14</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;div class=&quot;flex flex-wrap-reverse&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Flexbox Row and Column Direction</h3>
                            <p>Defines how flexbox items are ordered within a flexbox container.</p>
                            <h4>Flex Row</h4>
                            <p>The flexbox items are ordered the same way as the text direction, along the main axis.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <div class="flex flex-row">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;div class=&quot;flex flex-row&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                        <div class="outputs">
                            <h4>Flex Row Reverse</h4>
                            <p>The flexbox items are ordered the opposite way as the text direction, along the main axis.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <div class="flex flex-row-reverse">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;div class=&quot;flex flex-row-reverse&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                        <div class="outputs">
                            <h4>Flex Column</h4>
                            <p>The flexbox items are ordered the same way as the text direction, along the cross axis.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <div class="flex flex-column">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;div class=&quot;flex flex-column&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h4>Flex Column Reverse</h4>
                            <p>The flexbox items are ordered the opposite way as the text direction, along the cross axis.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <div class="flex flex-column-reverse">
                                    <div class="medium-spacing border border-orange m-tiny">Item 1</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 2</div>
                                    <div class="medium-spacing border border-orange m-tiny">Item 3</div>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;div class=&quot;flex flex-column-reverse&quot;&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 1&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 2&lt;/div&gt;
        &lt;div class=&quot;medium-spacing border border-orange&quot;&gt;Item 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    </div>
                </section>
            </main>
    </body>
</html>