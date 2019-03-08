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
                    <h1 class="page-title">Tooltip</h1>
                </div>
                <section class="medium-spacing">
                    <p>A tooltip is often used to specify extra information about something when the user moves the mouse pointer over an element</p>
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Top Tooltip</h3>
                            <p>If you want the tooltip to appear on top where use top tooltip.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <span class="tooltip tooltip-top button" tooltip="I'm up above it!">Top Tooltip</span>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;span class=&quot;tooltip tooltip-top&quot; tooltip=&quot;I'm up above it!&quot;&gt;Top Tooltip&lt;/span&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                        <div class="outputs">
                            <h3>Bottom Tooltip</h3>
                            <p>If you want the tooltip to appear on bottom where use bottom tooltip.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <span class="tooltip tooltip-bottom button" tooltip="I'm down above it!">Bottom Tooltip</span>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;span class=&quot;tooltip tooltip-bottom&quot; tooltip=&quot;I'm down above it!&quot;&gt;Bottom Tooltip&lt;/span&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                        <div class="outputs">
                            <h3>Left Tooltip</h3>
                            <p>If you want the tooltip to appear on left where use left tooltip.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <span class="tooltip tooltip-left button" tooltip="I'm left above it!">Left Tooltip</span>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;span class=&quot;tooltip tooltip-left&quot; tooltip=&quot;I'm left above it!&quot;&gt;Left Tooltip&lt;/span&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                        <div class="outputs">
                            <h3>Right Tooltip</h3>
                            <p>If you want the tooltip to appear on right where use right tooltip.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <span class="tooltip tooltip-right button" tooltip="I'm right above it!">Right Tooltip</span>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;span class=&quot;tooltip tooltip-right&quot; tooltip=&quot;I'm right above it!&quot;&gt;Right Tooltip&lt;/span&gt;
&lt;/div&gt;
                        </pre>
                        </div>
                </section>
            </section>
            </main>
        </section>
        <?php include 'footer.php'; ?>
        <?php include 'script.php'; ?>
    </body>
</html>