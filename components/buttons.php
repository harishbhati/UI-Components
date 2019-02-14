<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <section>
        <?php include 'sidebar.php'; ?>
            <main class="content">
            <div class="page-title-block">
                <h1 class="page-title">Buttons</h1>
            </div>
            <section class="medium-spacing">
                <p>Buttons are available in 6 different styles and 5 different sizes. You can mix and match between size and style. The primary color is determined by the $grey variable within the SCSS files. 
                    Other variations for red, orange, yellow, olive, green, teal, blue, violet, purple, pink, brown and black are also provided.</p>
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Standard Button</h3>
                            <p>A standard button</p>
                            <p><strong>Output:</strong></p>
                            <button class="button">Standard</button>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">&lt;button class=&quot;button&quot;&gt;Standard&lt;/button&gt;</pre>
                    </div>
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Basic Buttons</h3>
                            <p>A button can have different colors</p>
                            <p><strong>Output:</strong></p>
                            <button class="button btn-red">Red Button</button>
                            <button class="button btn-orange">Orange Button</button>
                            <button class="button btn-yellow">Yellow Button</button>
                            <button class="button btn-olive">Olive Button</button>
                            <button class="button btn-green">Green Button</button>
                            <button class="button btn-teal">Teal Button</button>
                            <button class="button btn-blue">Blue Button</button>
                            <button class="button btn-violet">Violet Button</button>
                            <button class="button btn-purple">Purple Button</button>
                            <button class="button btn-pink">Pink Button</button>
                            <button class="button btn-brown">Brown Button</button>
                            <button class="button btn-grey">Grey Button</button>
                            <button class="button btn-black">Black Button</button>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;button class=&quot;button btn-red&quot;&gt;Red Button&lt;/button&gt;
&lt;button class=&quot;button btn-orange&quot;&gt;Orange Button&lt;/button&gt;
&lt;button class=&quot;button btn-yellow&quot;&gt;Yellow Button&lt;/button&gt;
&lt;button class=&quot;button btn-olive&quot;&gt;Olive Button&lt;/button&gt;
&lt;button class=&quot;button btn-green&quot;&gt;Green Button&lt;/button&gt;
&lt;button class=&quot;button btn-teal&quot;&gt;Teal Button&lt;/button&gt;
&lt;button class=&quot;button btn-blue&quot;&gt;Blue Button&lt;/button&gt;
&lt;button class=&quot;button btn-violet&quot;&gt;Violet Button&lt;/button&gt;
&lt;button class=&quot;button btn-purple&quot;&gt;Purple Button&lt;/button&gt;
&lt;button class=&quot;button btn-pink&quot;&gt;Pink Button&lt;/button&gt;
&lt;button class=&quot;button btn-brown&quot;&gt;Brown Button&lt;/button&gt;
&lt;button class=&quot;button btn-grey&quot;&gt;Grey Button&lt;/button&gt;
&lt;button class=&quot;button btn-black&quot;&gt;Black Button&lt;/button&gt;
                        </pre>
                    </div>
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Outline Buttons</h3>
                            <p>A button can be formatted to appear only border</p>
                            <p><strong>Output:</strong></p>
                            <button class="button basic red">Red Outline</button>
                            <button class="button basic orange">Orange Outline</button>
                            <button class="button basic yellow">Yellow Outline</button>
                            <button class="button basic olive">Olive Outline</button>
                            <button class="button basic green">Green Outline</button>
                            <button class="button basic teal">Teal Outline</button>
                            <button class="button basic blue">Blue Outline</button>
                            <button class="button basic violet">Violet Outline</button>
                            <button class="button basic purple">Purple Outline</button>
                            <button class="button basic pink">Pink Outline</button>
                            <button class="button basic brown">Brown Outline</button>
                            <button class="button basic grey">Grey Outline</button>
                            <button class="button basic black">Black Outline</button>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;button class=&quot;button basic red&quot;&gt;Red Outline&lt;/button&gt;
&lt;button class=&quot;button basic orange&quot;&gt;Orange Outline&lt;/button&gt;
&lt;button class=&quot;button basic yellow&quot;&gt;Yellow Outline&lt;/button&gt;
&lt;button class=&quot;button basic olive&quot;&gt;Olive Outline&lt;/button&gt;
&lt;button class=&quot;button basic green&quot;&gt;Green Outline&lt;/button&gt;
&lt;button class=&quot;button basic teal&quot;&gt;Teal Outline&lt;/button&gt;
&lt;button class=&quot;button basic blue&quot;&gt;Blue Outline&lt;/button&gt;
&lt;button class=&quot;button basic violet&quot;&gt;Violet Outline&lt;/button&gt;
&lt;button class=&quot;button basic purple&quot;&gt;Purple Outline&lt;/button&gt;
&lt;button class=&quot;button basic pink&quot;&gt;Pink Outline&lt;/button&gt;
&lt;button class=&quot;button basic brown&quot;&gt;Brown Outline&lt;/button&gt;
&lt;button class=&quot;button basic grey&quot;&gt;Grey Outline&lt;/button&gt;
&lt;button class=&quot;button basic black&quot;&gt;Black Outline&lt;/button&gt;
                        </pre>
                    </div>
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Inverted Buttons</h3>
                            <p>A button can be formatted to appear on dark backgrounds</p>
                            <p><strong>Output:</strong></p>
                            <button class="button basic red inverted">Red Inverted</button>
                            <button class="button basic orange inverted">Orange Inverted</button>
                            <button class="button basic yellow inverted">Yellow Inverted</button>
                            <button class="button basic olive inverted">Olive Inverted</button>
                            <button class="button basic green inverted">Green Inverted</button>
                            <button class="button basic teal inverted">Teal Inverted</button>
                            <button class="button basic blue inverted">Blue Inverted</button>
                            <button class="button basic violet inverted">Violet Inverted</button>
                            <button class="button basic purple inverted">Purple Inverted</button>
                            <button class="button basic pink inverted">Pink Inverted</button>
                            <button class="button basic brown inverted">Brown Inverted</button>
                            <button class="button basic grey inverted">Grey Inverted</button>
                            <button class="button basic black inverted">Black Inverted</button>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;button class=&quot;button basic red inverted&quot;&gt;Red Inverted&lt;/button&gt;
&lt;button class=&quot;button basic orange inverted&quot;&gt;Orange Inverted&lt;/button&gt;
&lt;button class=&quot;button basic yellow inverted&quot;&gt;Yellow Inverted&lt;/button&gt;
&lt;button class=&quot;button basic olive inverted&quot;&gt;Olive Inverted&lt;/button&gt;
&lt;button class=&quot;button basic green inverted&quot;&gt;Green Inverted&lt;/button&gt;
&lt;button class=&quot;button basic teal inverted&quot;&gt;Teal Inverted&lt;/button&gt;
&lt;button class=&quot;button basic blue inverted&quot;&gt;Blue Inverted&lt;/button&gt;
&lt;button class=&quot;button basic violet inverted&quot;&gt;Violet Inverted&lt;/button&gt;
&lt;button class=&quot;button basic purple inverted&quot;&gt;Purple Inverted&lt;/button&gt;
&lt;button class=&quot;button basic pink inverted&quot;&gt;Pink Inverted&lt;/button&gt;
&lt;button class=&quot;button basic brown inverted&quot;&gt;Brown Inverted&lt;/button&gt;
&lt;button class=&quot;button basic grey inverted&quot;&gt;Grey Inverted&lt;/button&gt;
&lt;button class=&quot;button basic black inverted&quot;&gt;Black Inverted&lt;/button&gt;
                        </pre>
                    </div>
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Group Horizontal Buttons</h3>
                            <p>Button groups can contain conditionals</p>
                            <p><strong>Output:</strong></p>
                            <div class="inline-buttons">
                                <button class="button btn-red">Save</button>
                                    <span class="or btn-yellow" data-after="OR"></span>
                                <button class="button btn-orange">Cancel</button>
                            </div>
                            <div class="inline-buttons">
                                <button class="button btn-grey">Button Group</button>
                                <button class="button btn-black">Button Group</button>
                                <button class="button btn-grey">Button Group</button>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;inline-buttons&quot;&gt;
    &lt;button class=&quot;button btn-red&quot;&gt;Save&lt;/button&gt;
    &lt;span class=&quot;or btn-yellow&quot; data-after=&quot;OR&quot;&gt;&lt;/span&gt;
    &lt;button class=&quot;button btn-orange&quot;&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;inline-buttons&quot;&gt;
    &lt;button class=&quot;button btn-grey&quot;&gt;Button Group&lt;/button&gt;
    &lt;button class=&quot;button btn-black&quot;&gt;Button Group&lt;/button&gt;
    &lt;button class=&quot;button btn-grey&quot;&gt;Button Group&lt;/button&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Group Vertical Buttons</h3>
                            <p>Buttons can exist together as a group</p>
                            <p><strong>Output:</strong></p>
                            <div class="vertical-buttons">
                                <button class="button btn-grey">Button Vertical group</button>
                                <button class="button btn-grey">Button Vertical group</button>
                                <button class="button btn-grey">Button Vertical group</button>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;vertical-buttons&quot;&gt;
    &lt;button class=&quot;button btn-grey&quot;&gt;Button Vertical group&lt;/button&gt;
    &lt;button class=&quot;button btn-grey&quot;&gt;Button Vertical group&lt;/button&gt;
    &lt;button class=&quot;button btn-grey&quot;&gt;Button Vertical group&lt;/button&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Border Radius</h3>
                            <p>A button can have different Radius</p>
                            <p><strong>Output:</strong></p>
                            <button class="button btn-blue radius-0">Radius 0</button>
                            <button class="button btn-blue radius-1">Radius 1</button>
                            <button class="button btn-blue radius-2">Radius 2</button>
                            <button class="button btn-blue radius-3">Radius 3</button>
                            <button class="button btn-blue radius-4">Radius 4</button>
                            <button class="button btn-blue radius-5">Radius 5</button>
                            <button class="button btn-blue border-rounded">Rounded Border</button>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;button class=&quot;button btn-blue radius-0&quot;&gt;Radius 0&lt;/button&gt;
&lt;button class=&quot;button btn-blue radius-1&quot;&gt;Radius 1&lt;/button&gt;
&lt;button class=&quot;button btn-blue radius-2&quot;&gt;Radius 2&lt;/button&gt;
&lt;button class=&quot;button btn-blue radius-3&quot;&gt;Radius 3&lt;/button&gt;
&lt;button class=&quot;button btn-blue radius-4&quot;&gt;Radius 4&lt;/button&gt;
&lt;button class=&quot;button btn-blue radius-5&quot;&gt;Radius 5&lt;/button&gt;
&lt;button class=&quot;button btn-blue border-rounded&quot;&gt;Rounded Border&lt;/button&gt;  
                        </pre>
                    </div>
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Buttons Sizes</h3>
                            <p>A button can have different sizes</p>
                            <p><strong>Output:</strong></p>
                            <button class="button btn-blue tiny-btn">Tiny</button>
                            <button class="button btn-blue small-btn">Small</button>
                            <button class="button btn-blue medium-btn">Medium</button>
                            <button class="button btn-blue big-btn">Big</button>
                            <button class="button btn-blue huge-btn">Huge</button>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;button class=&quot;button btn-blue tiny-btn&quot;&gt;Tiny&lt;/button&gt;
&lt;button class=&quot;button btn-blue small-btn&quot;&gt;Small&lt;/button&gt;
&lt;button class=&quot;button btn-blue medium-btn&quot;&gt;Medium&lt;/button&gt;
&lt;button class=&quot;button btn-blue big-btn&quot;&gt;Big&lt;/button&gt;
&lt;button class=&quot;button btn-blue huge-btn&quot;&gt;Huge&lt;/button&gt;
                        </pre>
                    </div>
                </section>
            </main>
        </section>
        <?php include 'footer.php'; ?>
        <?php include 'script.php'; ?>
    </body>
</html>