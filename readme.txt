=== HTML ShortCodes ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: http://example.com/
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Requires PHP: 5.2.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
== A brief Markdown Example ==

HTML element shortcodes
A, xA = article
D, xD = Div
arguments class and cols.
Class works like the html class attribute. Use rs_row in wrapper div then rs_sm, rs_md, and rs_large to create responsive columns.
Cols expects one of four values: one, two, three, four
Sec, xSec = Section
P, xP = Paragraph
x = View space - this is a dummy element that doesn't show on the html page. it's used to visuall break up content in the text editor.
BR = line break
LB = preserve line breaks in the post -  this is used for copying from a document and having wordpress respect line breaks.


Contact Page Template
[x]
[D class="rs_row"]
[D class="rs_md" cols="one"]

[D class="content_block"]
[address]
[phone][email]
[xD]

[D class="content_block divider_top"]
[hours header="true"]

[xD]

[D class="content_block"]
[mealtimes]

[xD]

[D class="content_block divider_top"]

[contacts]

[xD]

[xD]

[x]

[D class="rs_md" cols="three"]
[createmap]

[xD]
[xD]
[x]


About Page Template
[Sec]
[D class="rs_row"]
    [D class="rs_md" cols="one"]
    <img  src="image.jpg" alt="" />
    [xD]
    [D class="rs_md" cols="three"]
    <h2>Title</h2>
        [P]
        copy

        [xP]
    [xD]
[xD]
[D class="rs_row"]
    [D class="rs_md" cols="one"]
    <img  src="image.jpg" alt="" />
    [xD]
    [D class="rs_md" cols="three"]
        <h2>Title</h2>
        [P]
        copy

        [xP]
    [xD]
[xD]
[D class="rs_row"]
    [D class="rs_md" cols="three"]
        <h2>Title</h2>
        [P]
        Copy

        [xP]

        [P]
        Copy

        [xP]
    [xD]
    [D class="rs_md" cols="one"]
    <img  src="image.jpg" alt="" />
    [xD]
[xD]
[xSec]