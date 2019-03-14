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
                    <h1 class="page-title">Modal</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Standard Modal</h3>
                            <p>The Modal component consists of an overlay, a dialog and an optional close button. You can use any element to toggle a modal dialog. </p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <a href="#target-modal" class="modal-toggle button btn-grey" data-modal="modal-name">Standard Modal</a>
                            </div>
                            <div class="modal" id="target-modal">
                                <div class="modal-holder">
                                    <div class="modal-body">
                                        <a href="#" class="modal-close btn-close">&#x2716;</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eum delectus, libero, accusantium dolores inventore obcaecati placeat cum sapiente vel laboriosam similique totam id ducimus aperiam, ratione fuga blanditiis maiores.</p>
                                    </div>
                                </div>
                            </div>
                            <p><strong>Code Example:</strong></p>
                            <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;a href=&quot;#target-modal&quot; class=&quot;modal-toggle button btn-grey&quot; data-modal=&quot;modal-name&quot;&gt;Standard Modal&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;modal&quot; id=&quot;target-modal&quot;&gt;
    &lt;div class=&quot;modal-holder&quot;&gt;
        &lt;div class=&quot;modal-body&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;modal-close btn-close&quot;&gt;&amp;#x2716;&lt;/a&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eum delectus, libero, 
            accusantium dolores inventore obcaecati placeat cum sapiente vel laboriosam similique totam id ducimus aperiam, ratione fuga blanditiis maiores.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                            </pre>
                        </div>
                        <div class="outputs">
                            <h3>Modal Header</h3>
                            <p>The Modal component consists of an overlay, a dialog and an optional close button. You can use any element to toggle a modal dialog. </p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <a href="#target-modal2" class="modal-toggle button btn-grey">Modal Header</a>
                            </div>
                            <div class="modal" id="target-modal2">
                                <div class="modal-holder">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Modal Header Title</h2>
                                        <a  href="#" class="modal-close btn-close">&#x2716;</a>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eum delectus, libero, accusantium dolores inventore obcaecati placeat cum sapiente vel laboriosam similique totam id ducimus aperiam, ratione fuga blanditiis maiores.</p>
                                    </div>
                                </div>
                            </div>
                            <p><strong>Code Example:</strong></p>
                            <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;a href=&quot;#target-modal2&quot; class=&quot;modal-toggle button btn-grey&quot;&gt;Modal Header&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;modal&quot; id=&quot;target-modal2&quot;&gt;
    &lt;div class=&quot;modal-holder&quot;&gt;
        &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h2 class=&quot;modal-title&quot;&gt;Modal Header Title&lt;/h2&gt;
            &lt;a  href=&quot;#&quot; class=&quot;modal-close btn-close&quot;&gt;&amp;#x2716;&lt;/a&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-body&quot;&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eum delectus, libero, 
            accusantium dolores inventore obcaecati placeat cum sapiente vel laboriosam similique totam id ducimus aperiam, ratione fuga blanditiis maiores.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                            </pre>
                        </div>
                        <div class="outputs">
                            <h3>Modal Footer</h3>
                            <p>The Modal component consists of an overlay, a dialog and an optional close button. You can use any element to toggle a modal dialog. </p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <a href="#target-modal3" class="modal-toggle button btn-grey">Modal Footer</a>
                            </div>
                            <div class="modal" id="target-modal3">
                                <div class="modal-holder">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Modal Header Title</h2>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eum delectus, libero, accusantium dolores inventore obcaecati placeat cum sapiente vel laboriosam similique totam id ducimus aperiam, ratione fuga blanditiis maiores.</p>
                                    </div>
                                    <div class="modal-footer text-center">
                                        <div class="inline-buttons">
                                            <a href="#" class="button btn-grey">Save</a>
                                                <span class="or btn-black" data-after="OR"></span>
                                            <a href="#" class="button btn-grey modal-close">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><strong>Code Example:</strong></p>
                            <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;a href=&quot;#target-modal3&quot; class=&quot;modal-toggle button btn-grey&quot;&gt;Modal Footer&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;modal&quot; id=&quot;target-modal3&quot;&gt;
    &lt;div class=&quot;modal-holder&quot;&gt;
        &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h2 class=&quot;modal-title&quot;&gt;Modal Header Title&lt;/h2&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-body&quot;&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eum delectus, libero, 
            accusantium dolores inventore obcaecati placeat cum sapiente vel laboriosam similique totam id ducimus aperiam, ratione fuga blanditiis maiores.&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-footer text-center&quot;&gt;
            &lt;div class=&quot;inline-buttons&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;button btn-grey&quot;&gt;Save&lt;/a&gt;
                    &lt;span class=&quot;or btn-black&quot; data-after=&quot;OR&quot;&gt;&lt;/span&gt;
                &lt;a href=&quot;#&quot; class=&quot;button btn-grey modal-close&quot;&gt;Cancel&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                            </pre>
                        </div>
                    </div>
                </section>
        </section>
        </main>
        </section>
    <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>
    </body>
</html>