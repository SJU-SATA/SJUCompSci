<?php
/**
 * Copyright © 2018 SJU Student Advancement of Technology Association
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */

require_once '../private/initialize.php';

$page_title = 'Home';
?>
<html>

<?php include ROOT_DIR . 'private/template/head_template.php'; ?>

<body>

<?php include ROOT_DIR . 'private/template/navigation_template.php'; ?>

<main>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-6 col-sm-offset-3">
                <h1>SJU Computer Science Society</h1>
                <p>Presented by SJU Student Advancement of Technology Association</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-4 col-sm-offset-4">
                <h2>PHP Basics</h2>
                <h3>April 16th, 2018</h3>
                <a href="interactive.php">>> Interactive PHP Coder <<</a>
            </div>
        </div>
    </div>
</main>

<?php include ROOT_DIR . 'private/template/footer_template.php'; ?>

</body>

</html>
