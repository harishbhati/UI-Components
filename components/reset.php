<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <section>
        <?php include 'sidebar.php'; ?>
            <main class="content">
                <div class="page-title-block">
                    <h1 class="page-title">Reset</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Reset CSS</h3>
                            <p>This is the stylesheet that made CSS resets a mainstay. Reset CSS either nullifies a default CSS property by setting it to 0, or it sets the property to a common-sense value (e.g., line-height: 1 on the <body> element). </p>
                        </div>
                        <pre class="markup">
*, *:before, *:after {
  box-sizing: border-box;
}
h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}
p {
  margin-top: 0;
  margin-bottom: 1rem;
}
ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}
dt {
  font-weight: 700;
}
  
dd {
  margin-bottom: .5rem;
  margin-left: 0;
}
figure {
  margin: 0 0 1rem;
}
img {
  max-width: 100%;
  height: auto;
}
address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}
blockquote {
  margin: 0 0 1rem;
}
  
b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}
  
sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}
a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
}

a:hover {
  color: #0056b3;
}

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none;
}
  
a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}
table {
  border-collapse: collapse;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
button,
[type=&quot;button&quot;],
[type=&quot;reset&quot;],
[type=&quot;submit&quot;] {
  -webkit-appearance: button;
}
button::-moz-focus-inner,
[type=&quot;button&quot;]::-moz-focus-inner,
[type=&quot;reset&quot;]::-moz-focus-inner,
[type=&quot;submit&quot;]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type=&quot;radio&quot;],
input[type=&quot;checkbox&quot;] {
  box-sizing: border-box;
  padding: 0;
}

input[type=&quot;date&quot;],
input[type=&quot;time&quot;],
input[type=&quot;datetime-local&quot;],
input[type=&quot;month&quot;] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}
[type=&quot;number&quot;]::-webkit-inner-spin-button,
[type=&quot;number&quot;]::-webkit-outer-spin-button {
  height: auto;
}

[type=&quot;search&quot;] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type=&quot;search&quot;]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}
                        </pre>
                    </div>
                </section>
            </main>
      <?php include 'script.php'; ?>
    </body>
</html>