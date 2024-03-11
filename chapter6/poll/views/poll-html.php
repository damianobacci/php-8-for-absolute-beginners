<?php

$info = "
<aside id='poll'>
<h1>Poll results</h1>
<ul>
<li>" . $pollData->getYes() . " said Yes</li>
<li>" . $pollData->getNo() . " said No</li>
</ul>
</aside>
";