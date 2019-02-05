<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <section>
        <?php include 'sidebar.php'; ?>
            <main class="content">
                <div class="page-title-block">
                    <h1 class="page-title">Cards</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Image Card without Border</h3>
                            <p>A card contains images and text both.Border and background color are transparent.</p>
                            <p><strong>Output:</strong></p>
                            <div class="grid-row">
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-discription">
                                            <div class="card-header image-holder">
                                                <img class="card-img img-responsive" 
                                                src="http://mediahomes.in/wp-content/uploads/2017/11/16406407_1145526325546159_5178018251033556532_n.jpg" alt="Amazing Home">
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">Card Title</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                                </p> 
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" class="button basic grey">Button 1</a>
                                            <a href="#" class="button basic grey">Button 2</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;grid-row&quot;&gt;
    &lt;div class=&quot;col-4&quot;&gt;
        &lt;div class=&quot;card&quot;&gt;
            &lt;div class=&quot;card-discription&quot;&gt;
                &lt;div class=&quot;card-header image-holder&quot;&gt;
                    &lt;img class=&quot;card-img img-responsive&quot; src=&quot;&quot; alt=&quot;Amazing Home&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;card-body&quot;&gt;
                    &lt;h3 class=&quot;card-title&quot;&gt;Card Title&lt;/h3&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    &lt;/p&gt; 
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;button basic grey&quot;&gt;Button 1&lt;/a&gt;
                &lt;a href=&quot;#&quot; class=&quot;button basic grey&quot;&gt;Button 2&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>

                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Border Card</h3>
                            <p>A card contains border and background color.</p>
                            <p><strong>Output:</strong></p>
                            <div class="grid-row">
                                <div class="col-4">
                                    <div class="card border border-orange bg-white-light">
                                        <div class="card-discription">
                                            <div class="card-header image-holder">
                                                <img class="card-img img-responsive" 
                                                src="http://mediahomes.in/wp-content/uploads/2017/11/16406407_1145526325546159_5178018251033556532_n.jpg" alt="Amazing Home">
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">Card Title</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                                </p> 
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" class="button basic orange">Button 1</a>
                                            <a href="#" class="button basic btn-orange">Button 2</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;grid-row&quot;&gt;
    &lt;div class=&quot;col-4&quot;&gt;
        &lt;div class=&quot;card border border-orange bg-white-light&quot;&gt;
            &lt;div class=&quot;card-discription&quot;&gt;
                &lt;div class=&quot;card-header image-holder&quot;&gt;
                    &lt;img class=&quot;card-img img-responsive&quot; src=&quot;&quot; alt=&quot;Amazing Home&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;card-body&quot;&gt;
                    &lt;h3 class=&quot;card-title&quot;&gt;Card Title&lt;/h3&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    &lt;/p&gt; 
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;button basic orange&quot;&gt;Button 1&lt;/a&gt;
                &lt;a href=&quot;#&quot; class=&quot;button basic btn-orange&quot;&gt;Button 2&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>

                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Multiple Card</h3>
                            <p>A list of card where more than one card.</p>
                            <p><strong>Output:</strong></p>
                            <div class="grid-row">
                                <div class="col-4">
                                    <div class="card border border-orange bg-white-light">
                                        <div class="card-discription">
                                            <div class="card-header image-holder">
                                                <img class="card-img img-responsive" 
                                                src="http://mediahomes.in/wp-content/uploads/2017/11/16406407_1145526325546159_5178018251033556532_n.jpg" alt="Amazing Home">
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">Card Title</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                                </p> 
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" class="button basic orange">Button 1</a>
                                            <a href="#" class="button basic btn-orange">Button 2</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                        <div class="card border border-orange bg-white-light">
                                            <div class="card-discription">
                                                <div class="card-header image-holder">
                                                    <img class="card-img img-responsive" 
                                                    src="http://mediahomes.in/wp-content/uploads/2017/11/16406407_1145526325546159_5178018251033556532_n.jpg" alt="Amazing Home">
                                                </div>
                                                <div class="card-body">
                                                    <h3 class="card-title">Card Title</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                                    </p> 
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="button basic orange">Button 1</a>
                                                <a href="#" class="button basic btn-orange">Button 2</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;grid-row&quot;&gt;
    &lt;div class=&quot;col-4&quot;&gt;
        &lt;div class=&quot;card border border-orange bg-white-light&quot;&gt;
            &lt;div class=&quot;card-discription&quot;&gt;
                &lt;div class=&quot;card-header image-holder&quot;&gt;
                    &lt;img class=&quot;card-img img-responsive&quot; src=&quot;&quot; alt=&quot;Amazing Home&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;card-body&quot;&gt;
                    &lt;h3 class=&quot;card-title&quot;&gt;Card Title&lt;/h3&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    &lt;/p&gt; 
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;button basic orange&quot;&gt;Button 1&lt;/a&gt;
                &lt;a href=&quot;#&quot; class=&quot;button basic btn-orange&quot;&gt;Button 2&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-4&quot;&gt;
        &lt;div class=&quot;card border border-orange bg-white-light&quot;&gt;
            &lt;div class=&quot;card-discription&quot;&gt;
                &lt;div class=&quot;card-header image-holder&quot;&gt;
                    &lt;img class=&quot;card-img img-responsive&quot; src=&quot;&quot; alt=&quot;Amazing Home&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;card-body&quot;&gt;
                    &lt;h3 class=&quot;card-title&quot;&gt;Card Title&lt;/h3&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    &lt;/p&gt; 
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;button basic orange&quot;&gt;Button 1&lt;/a&gt;
                &lt;a href=&quot;#&quot; class=&quot;button basic btn-orange&quot;&gt;Button 2&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>

                     <div class="large-spacing">
                        <div class="outputs">
                            <h3>Text Card</h3>
                            <p>A card contains Only titel and descriptions.</p>
                            <p><strong>Output:</strong></p>
                            <div class="grid-row">
                                <div class="col-4">
                                    <div class="card border border-orange bg-white-light">
                                        <div class="card-discription">
                                            <div class="card-header text-center border-bottom border-orange">
                                                <h3 class="card-title">Card Title</h3>
                                            </div>
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                                </p> 
                                            </div>
                                        </div>
                                        <div class="card-footer border-top border-orange text-center">
                                            <a href="#" class="button basic orange">Button 1</a>
                                            <a href="#" class="button basic btn-orange">Button 2</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;grid-row&quot;&gt;
    &lt;div class=&quot;col-4&quot;&gt;
        &lt;div class=&quot;card border border-orange bg-white-light&quot;&gt;
            &lt;div class=&quot;card-discription&quot;&gt;
                &lt;div class=&quot;card-header&quot;&gt;
                    &lt;h3 class=&quot;card-title&quot;&gt;Card Title&lt;/h3&gt; 
                &lt;/div&gt;
                &lt;div class=&quot;card-body&quot;&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    &lt;/p&gt; 
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;button basic orange&quot;&gt;Button 1&lt;/a&gt;
                &lt;a href=&quot;#&quot; class=&quot;button basic btn-orange&quot;&gt;Button 2&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>

                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Image Left Card</h3>
                            <p>A card contains image left and descriptions and actions are right.</p>
                            <p><strong>Output:</strong></p>
                            <div class="grid-row">
                                <div class="col-1">
                                    <div class="card border border-orange bg-white-light">
                                        <div class="card-image">
                                            <img class="card-img img-responsive" 
                                            src="http://mediahomes.in/wp-content/uploads/2017/11/16406407_1145526325546159_5178018251033556532_n.jpg" alt="Amazing Home">
                                        </div>
                                        <div class="discription small-spacing">
                                            <div class="text-holder">
                                                <h3 class="card-title">Card Title</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                                </p> 
                                            </div>
                                            <div class="card-action">
                                                <a href="#" class="button basic orange">Button 1</a>
                                                <a href="#" class="button btn-orange">Button 2</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;grid-row&quot;&gt;
    &lt;div class=&quot;col-1&quot;&gt;
        &lt;div class=&quot;card border border-orange bg-white-light&quot;&gt;
            &lt;div class=&quot;card-image&quot;&gt;
                &lt;img class=&quot;card-img img-responsive&quot; 
                src=&quot;&quot; alt=&quot;Amazing Home&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;discription small-spacing&quot;&gt;
                &lt;div class=&quot;text-holder&quot;&gt;
                    &lt;h3 class=&quot;card-title&quot;&gt;Card Title&lt;/h3&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    &lt;/p&gt; 
                &lt;/div&gt;
                &lt;div class=&quot;card-action&quot;&gt;
                    &lt;a href=&quot;#&quot; class=&quot;button basic orange&quot;&gt;Button 1&lt;/a&gt;
                    &lt;a href=&quot;#&quot; class=&quot;button btn-orange&quot;&gt;Button 2&lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>

                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Image Right Card</h3>
                            <p>A card contains image right and descriptions and actions are left.</p>
                            <p><strong>Output:</strong></p>
                            <div class="grid-row">
                                <div class="col-1">
                                    <div class="card border border-orange bg-white-light">
                                        <div class="discription small-spacing">
                                            <div class="text-holder">
                                                <h3 class="card-title">Card Title</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                                </p> 
                                            </div>
                                            <div class="card-action">
                                                <a href="#" class="button basic orange">Button 1</a>
                                                <a href="#" class="button btn-orange">Button 2</a>
                                            </div>
                                        </div>
                                        <div class="card-image">
                                            <img class="card-img img-responsive" 
                                            src="http://mediahomes.in/wp-content/uploads/2017/11/16406407_1145526325546159_5178018251033556532_n.jpg" alt="Amazing Home">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;grid-row&quot;&gt;
    &lt;div class=&quot;col-1&quot;&gt;
        &lt;div class=&quot;card border border-orange bg-white-light&quot;&gt;
            &lt;div class=&quot;discription small-spacing&quot;&gt;
                &lt;div class=&quot;text-holder&quot;&gt;
                    &lt;h3 class=&quot;card-title&quot;&gt;Card Title&lt;/h3&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    &lt;/p&gt; 
                &lt;/div&gt;
                &lt;div class=&quot;card-action&quot;&gt;
                    &lt;a href=&quot;#&quot; class=&quot;button basic orange&quot;&gt;Button 1&lt;/a&gt;
                    &lt;a href=&quot;#&quot; class=&quot;button btn-orange&quot;&gt;Button 2&lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-image&quot;&gt;
                &lt;img class=&quot;card-img img-responsive&quot; src=&quot;&quot; alt=&quot;Amazing Home&quot;&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                </section>
            </main>
    </body>
</html>