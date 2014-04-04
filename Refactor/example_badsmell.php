1. Indentation
Your indentation should always reflect logical structure. Use real tabs and not spaces, as this allows the most flexibility across clients.
Exception: if you have a block of code that would be more readable if things are aligned, use spaces:

[tab]$foo   = 'somevalue';
[tab]$foo2  = 'somevalue2';
[tab]$foo34 = 'somevalue3';
[tab]$foo5  = 'somevalue4';

For associative arrays, values should start on a new line. Note the comma after the last array item: this is recommended because it makes it easier to change the order of the array, 
and makes for cleaner diffs when new items are added.

$my_array = array(
[tab]'foo'   => 'somevalue',
[tab]'foo2'  => 'somevalue2',
[tab]'foo3'  => 'somevalue3',
[tab]'foo34' => 'somevalue3',
);

Rule of thumb: Tabs should be used at the beginning of the line for indentation, while spaces can be used mid-line for alignment.

2. Brace Style

Braces shall be used for all blocks in the style shown here:

if ( condition ) {
    action1();
    action2();
} elseif ( condition2 && condition3 ) {
    action3();
    action4();
} else {
    defaultaction();
}
Furthermore, if you have a really long block, consider whether it can be broken into two or more shorter blocks or functions. 
If you consider such a long block unavoidable, please put a short comment at the end so people can tell at glance what that ending brace ends – typically 
this is appropriate for a logic block, longer than about 35 rows, but any code that’s not intuitively obvious can be commented.

Braces should always be used, even when they are not required:

if ( condition ) {
    action0();
}
 
if ( condition ) {
    action1();
} elseif ( condition2 ) {
    action2a();
    action2b();
}
 
foreach ( $items as $item ) {
    process_item( $item );
}

3. When referring to array items, only include a space around the index if it is a variable, for example:

$x = $foo['bar']; // correct
$x = $foo[ 'bar' ]; // incorrect
 
$x = $foo[0]; // correct
$x = $foo[ 0 ]; // incorrect
 
$x = $foo[ $bar ]; // correct
$x = $foo[$bar]; // incorrect

4. Self-Explanatory Flag Values for Function Arguments #

Prefer string values to just true and false when calling functions.

// Incorrect
function eat( $what, $slowly = true ) {
...
}
eat( 'mushrooms' );
eat( 'mushrooms', true ); // what does true mean?
eat( 'dogfood', false ); // what does false mean? The opposite of true?
Since PHP doesn’t support named arguments, the values of the flags are meaningless, and each time we come across a function call like the examples above, we have to search for the function definition. The code can be made more readable by using descriptive string values, instead of booleans.

// Correct
function eat( $what, $speed = 'slowly' ) {
...
}
eat( 'mushrooms' );
eat( 'mushrooms', 'slowly' );
eat( 'dogfood', 'quickly' );

5. Clever Code #

In general, readability is more important than cleverness or brevity.

isset( $var ) || $var = some_function();
Although the above line is clever, it takes a while to grok if you’re not familiar with it. So, just write it like this:

if ( ! isset( $var ) ) {
    $var = some_function();
}