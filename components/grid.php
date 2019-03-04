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
                    <h1 class="page-title">Grid</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <p>Grids divide horizontal space into indivisible units called "columns".
                                All columns in a grid must specify their width as proportion of the total available row width.
                            </p>
                        </div>
                        <div class="outputs">
                            <h3>Col 1</h3>
                            <p>The example below shows one columns will fit in a row.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="grid-row">
                                    <div class="col-1 border border-orange small-spacing text-center">Col 1</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;grid-row&quot;&gt;
        &lt;div class=&quot;col-1&quot;&gt;Col 1&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>

                    <div class="outputs">
                            <h3>Col 2</h3>
                            <p>The example below shows two columns will fit in a row.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="grid-row">
                                    <div class="col-2 border border-orange small-spacing text-center">Col 2</div>
                                    <div class="col-2 border border-orange small-spacing text-center">Col 2</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;grid-row&quot;&gt;
        &lt;div class=&quot;col-2&quot;&gt;Col 2&lt;/div&gt;
        &lt;div class=&quot;col-2&quot;&gt;Col 2&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>

                    <div class="outputs">
                            <h3>Col 3</h3>
                            <p>The example below shows three columns will fit in a row.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="grid-row">
                                    <div class="col-3 border border-orange small-spacing text-center">Col 3</div>
                                    <div class="col-3 border border-orange small-spacing text-center">Col 3</div>
                                    <div class="col-3 border border-orange small-spacing text-center">Col 3</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;grid-row&quot;&gt;
        &lt;div class=&quot;col-3&quot;&gt;Col 3&lt;/div&gt;
        &lt;div class=&quot;col-3&quot;&gt;Col 3&lt;/div&gt;
        &lt;div class=&quot;col-3&quot;&gt;Col 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>

                    <div class="outputs">
                            <h3>Col 4</h3>
                            <p>The example below shows four columns will fit in a row.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="grid-row">
                                    <div class="col-4 border border-orange small-spacing text-center">Col 4</div>
                                    <div class="col-4 border border-orange small-spacing text-center">Col 4</div>
                                    <div class="col-4 border border-orange small-spacing text-center">Col 4</div>
                                    <div class="col-4 border border-orange small-spacing text-center">Col 4</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;grid-row&quot;&gt;
        &lt;div class=&quot;col-4&quot;&gt;Col 4&lt;/div&gt;
        &lt;div class=&quot;col-4&quot;&gt;Col 4&lt;/div&gt;
        &lt;div class=&quot;col-4&quot;&gt;Col 4&lt;/div&gt;
        &lt;div class=&quot;col-4&quot;&gt;Col 4&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>

                    <div class="outputs">
                            <h3>Col 5</h3>
                            <p>The example below shows five columns will fit in a row.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="grid-row">
                                    <div class="col-5 border border-orange small-spacing text-center">Col 5</div>
                                    <div class="col-5 border border-orange small-spacing text-center">Col 5</div>
                                    <div class="col-5 border border-orange small-spacing text-center">Col 5</div>
                                    <div class="col-5 border border-orange small-spacing text-center">Col 5</div>
                                    <div class="col-5 border border-orange small-spacing text-center">Col 5</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;grid-row&quot;&gt;
        &lt;div class=&quot;col-5&quot;&gt;Col 5&lt;/div&gt;
        &lt;div class=&quot;col-5&quot;&gt;Col 5&lt;/div&gt;
        &lt;div class=&quot;col-5&quot;&gt;Col 5&lt;/div&gt;
        &lt;div class=&quot;col-5&quot;&gt;Col 5&lt;/div&gt;
        &lt;div class=&quot;col-5&quot;&gt;Col 5&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>

                    <div class="outputs">
                            <h3>Col 6</h3>
                            <p>The example below shows six columns will fit in a row.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="grid-row">
                                    <div class="col-6 border border-orange small-spacing text-center">Col 6</div>
                                    <div class="col-6 border border-orange small-spacing text-center">Col 6</div>
                                    <div class="col-6 border border-orange small-spacing text-center">Col 6</div>
                                    <div class="col-6 border border-orange small-spacing text-center">Col 6</div>
                                    <div class="col-6 border border-orange small-spacing text-center">Col 6</div>
                                    <div class="col-6 border border-orange small-spacing text-center">Col 6</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;grid-row&quot;&gt;
        &lt;div class=&quot;col-6&quot;&gt;Col 6&lt;/div&gt;
        &lt;div class=&quot;col-6&quot;&gt;Col 6&lt;/div&gt;
        &lt;div class=&quot;col-6&quot;&gt;Col 6&lt;/div&gt;
        &lt;div class=&quot;col-6&quot;&gt;Col 6&lt;/div&gt;
        &lt;div class=&quot;col-6&quot;&gt;Col 6&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Col 7</h3>
                            <p>The example below shows seven columns will fit in a row.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="grid-row">
                                    <div class="col-7 border border-orange small-spacing text-center">Col 7</div>
                                    <div class="col-7 border border-orange small-spacing text-center">Col 7</div>
                                    <div class="col-7 border border-orange small-spacing text-center">Col 7</div>
                                    <div class="col-7 border border-orange small-spacing text-center">Col 7</div>
                                    <div class="col-7 border border-orange small-spacing text-center">Col 7</div>
                                    <div class="col-7 border border-orange small-spacing text-center">Col 7</div>
                                    <div class="col-7 border border-orange small-spacing text-center">Col 7</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;grid-row&quot;&gt;
        &lt;div class=&quot;col-7&quot;&gt;Col 7&lt;/div&gt;
        &lt;div class=&quot;col-7&quot;&gt;Col 7&lt;/div&gt;
        &lt;div class=&quot;col-7&quot;&gt;Col 7&lt;/div&gt;
        &lt;div class=&quot;col-7&quot;&gt;Col 7&lt;/div&gt;
        &lt;div class=&quot;col-7&quot;&gt;Col 7&lt;/div&gt;
        &lt;div class=&quot;col-7&quot;&gt;Col 7&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Col 8</h3>
                            <p>The example below shows eight columns will fit in a row.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="grid-row">
                                    <div class="col-8 border border-orange small-spacing text-center">Col 8</div>
                                    <div class="col-8 border border-orange small-spacing text-center">Col 8</div>
                                    <div class="col-8 border border-orange small-spacing text-center">Col 8</div>
                                    <div class="col-8 border border-orange small-spacing text-center">Col 8</div>
                                    <div class="col-8 border border-orange small-spacing text-center">Col 8</div>
                                    <div class="col-8 border border-orange small-spacing text-center">Col 8</div>
                                    <div class="col-8 border border-orange small-spacing text-center">Col 8</div>
                                    <div class="col-8 border border-orange small-spacing text-center">Col 8</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;grid-row&quot;&gt;
        &lt;div class=&quot;col-8&quot;&gt;Col 8&lt;/div&gt;
        &lt;div class=&quot;col-8&quot;&gt;Col 8&lt;/div&gt;
        &lt;div class=&quot;col-8&quot;&gt;Col 8&lt;/div&gt;
        &lt;div class=&quot;col-8&quot;&gt;Col 8&lt;/div&gt;
        &lt;div class=&quot;col-8&quot;&gt;Col 8&lt;/div&gt;
        &lt;div class=&quot;col-8&quot;&gt;Col 8&lt;/div&gt;
        &lt;div class=&quot;col-8&quot;&gt;Col 8&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Col 9</h3>
                            <p>The example below shows nine columns will fit in a row.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="grid-row">
                                    <div class="col-9 border border-orange small-spacing text-center">Col 9</div>
                                    <div class="col-9 border border-orange small-spacing text-center">Col 9</div>
                                    <div class="col-9 border border-orange small-spacing text-center">Col 9</div>
                                    <div class="col-9 border border-orange small-spacing text-center">Col 9</div>
                                    <div class="col-9 border border-orange small-spacing text-center">Col 9</div>
                                    <div class="col-9 border border-orange small-spacing text-center">Col 9</div>
                                    <div class="col-9 border border-orange small-spacing text-center">Col 9</div>
                                    <div class="col-9 border border-orange small-spacing text-center">Col 9</div>
                                    <div class="col-9 border border-orange small-spacing text-center">Col 9</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;grid-row&quot;&gt;
        &lt;div class=&quot;col-9&quot;&gt;Col 9&lt;/div&gt;
        &lt;div class=&quot;col-9&quot;&gt;Col 9&lt;/div&gt;
        &lt;div class=&quot;col-9&quot;&gt;Col 9&lt;/div&gt;
        &lt;div class=&quot;col-9&quot;&gt;Col 9&lt;/div&gt;
        &lt;div class=&quot;col-9&quot;&gt;Col 9&lt;/div&gt;
        &lt;div class=&quot;col-9&quot;&gt;Col 9&lt;/div&gt;
        &lt;div class=&quot;col-9&quot;&gt;Col 9&lt;/div&gt;
        &lt;div class=&quot;col-9&quot;&gt;Col 9&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Col 10</h3>
                            <p>The example below shows ten columns will fit in a row.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="grid-row">
                                    <div class="col-10 border border-orange small-spacing text-center">Col 10</div>
                                    <div class="col-10 border border-orange small-spacing text-center">Col 10</div>
                                    <div class="col-10 border border-orange small-spacing text-center">Col 10</div>
                                    <div class="col-10 border border-orange small-spacing text-center">Col 10</div>
                                    <div class="col-10 border border-orange small-spacing text-center">Col 10</div>
                                    <div class="col-10 border border-orange small-spacing text-center">Col 10</div>
                                    <div class="col-10 border border-orange small-spacing text-center">Col 10</div>
                                    <div class="col-10 border border-orange small-spacing text-center">Col 10</div>
                                    <div class="col-10 border border-orange small-spacing text-center">Col 10</div>
                                    <div class="col-10 border border-orange small-spacing text-center">Col 10</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;grid-row&quot;&gt;
        &lt;div class=&quot;col-10&quot;&gt;Col 10&lt;/div&gt;
        &lt;div class=&quot;col-10&quot;&gt;Col 10&lt;/div&gt;
        &lt;div class=&quot;col-10&quot;&gt;Col 10&lt;/div&gt;
        &lt;div class=&quot;col-10&quot;&gt;Col 10&lt;/div&gt;
        &lt;div class=&quot;col-10&quot;&gt;Col 10&lt;/div&gt;
        &lt;div class=&quot;col-10&quot;&gt;Col 10&lt;/div&gt;
        &lt;div class=&quot;col-10&quot;&gt;Col 10&lt;/div&gt;
        &lt;div class=&quot;col-10&quot;&gt;Col 10&lt;/div&gt;
        &lt;div class=&quot;col-10&quot;&gt;Col 10&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Col 11</h3>
                            <p>The example below shows eleven columns will fit in a row.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="grid-row">
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;grid-row&quot;&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    <div class="outputs">
                            <h3>Col 12</h3>
                            <p>The example below shows twelve columns will fit in a row.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <div class="grid-row">
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                    <div class="col-11 border border-orange small-spacing text-center">Col 11</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;grid-row&quot;&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
        &lt;div class=&quot;col-11&quot;&gt;Col 11&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                    </div>
                </section>
            </section>
        </main>
        <?php include 'footer.php'; ?>
        <?php include 'script.php'; ?>
    </body>
</html>