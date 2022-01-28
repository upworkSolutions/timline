# timline
Vertical timeline


This is a simple dynamically vertical timeline sketch.
I put everything (html, css, js) in one file to make it easier to navigate the code.

Through the php loop we get all  div elements (line: 167) and 
with if commands (line: 170) change places of elements (left or right).

Below the timeline I have one button (line: 220) and click event on id="box".

Scrpit(js) code does everything he needs to do, except he doesn't scroll properly.

js code should do the following:

1. When the page is open, the first three divs should be appear. This part is done. 
 
 //show only first 3 div from loop, rest hide
 $(points).slice(3).hide();
 
2. By clicking on the button the text should be changed (show more/less).
This part is aslo done. 

3. THIS PART REMAINED UNFINISHED
When you click the button (show more / less), the page should scroll up or down but so that the button is always at the bottom of the page or close.

a)When I click show more, timeline should show all div elements and scroll to button, not below it. Because below goes on others divs, text and images.
It is necessary to scroll to the END OF THE TIMELINE and not to the end of the page.

b) When I click show less, timeline should hide  all div elements except firts 3 div  and SCROLL to button should end on botoom of page.
It is necessary to scroll to the END OF THE TIMELINE and not to the end of the page.
And the scroll should be slow not fast
You just need to adjust it so it scroll properly, that's all.
In the button folder you have two pictures of how the scrolling should look like

*HTML structure and CSS stylization should remain the same. But of course you can insert a new id, class or click event...
You can delete the JS code or fix it how you think is better, I leave that to you.
It is important that the scrolling works properly.
That is it responsive.
And to work on (Chrome, Mozilla, Safari, Edge)

