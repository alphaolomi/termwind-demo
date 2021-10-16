<?php

require 'vendor/autoload.php';

use function Termwind\{render,style};

// single line html...
render('<div class="p-1 bg-green-300">Termwind</div>');

// multi-line html...
// render(<<<'HTML'
//     <div>
//         <div class="p-1 bg-green-300">Termwind</div>
//         <em class="ml-1">
//           Give your CLI apps a unique look
//         </em>
//     </div>
// HTML);


style('btn')->apply('p-4 bg-blue text-color-white');

render('<div class="btn">Click me</div>');