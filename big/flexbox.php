<?php include "includes/header.php"?>   
 <p>Flexbox is one of the layout modes in CSS that aligns and distributes space along a single column or row in a container. In 2009, you would use ‘display: box’ to create a flexible container. There was a draft update to ‘display: flexbox’ in 2011, and then it had been updated to ‘display: flex’ in 2012. Flexbox was designed to make it easier and more efficient to design flexible layout structures without using float or positioning. “The main idea behind the flex payout is to give the container the ability to alter its items’ width/height (and order) to best fill the available space. (CSS-Tricks)”</p>
<p>To use a flexible box, the first thing to do is defining a flex container that would contain flex items. The flex container becomes flexible by setting the ‘display’ property to ‘flex’, then direct child elements of this container become flexible items automatically. The flex container can be laid either horizontally or vertically which is referred to as the main axis. A cross axis is defined automatically depending on the main axis direction, which is perpendicular to the main axis. The flexbox is based on flex-flow directions which you can play around using many properties with, so you can decide directions that fit well to your desired outcome.</p>
<p>Flexbox is generally used for aligning, scaling, or reordering elements within a parent container. It is very useful but these features are not supported by several brower environments. If you are using a browser that does not support flexbox, that means the browser does not understand those properties and will ignore them. Luckily, the flexbox is supported by most modern browsers except IE 6-9, Opera 10-11.5, and Opera mobile 12. Some browsers support it partially, for example, Safari 3.1-6 only supports the old version of flexbox and does not support wrapping, so you need to check out the browser support.</p>
<p>For those who have older browsers that do not support flex, there are some fallbacks that you can use polyfill which is “a piece of code(or plugin) that provides the technology that you, the developer, expect the browser to provide natively. (Sharp)” There are some shims or polyfills out there, for example, ‘flexibility’ is one of the polyfills for the flexbox that makes it possible to design flexible layouts even in older browsers. You can refer to their documentation and follow the steps to use them. Thanks to those fallbacks, you do not have to sacrifice your old browsers to design a flexible layout.</p>
    
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Citations</h3>
 <p>Caldwell, Alex. “When to Use Flexbox.” The Brolik Blog, 20 Apr. 2016, brolik.com/blog/when-to-use-flexbox/.</p>    
 <p>“A Complete Guide to Flexbox: CSS-Tricks.” CSS, 27 Apr. 2020, css-tricks.com/snippets/css/a-guide-to-flexbox/.</p>      
 <p>“Backwards Compatibility of Flexbox.” MDN Web Docs, developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Backwards_Compatibility_of_Flexbox.</p>
<p>“Can I Use... Support Tables for HTML5, CSS3, Etc.” Can I Use... Support Tables for HTML5, CSS3, Etc, caniuse.com/#feat=flexbox.</p>
<p>Sharp, Remy. “What Is a Polyfill?” Remy Sharp's b:Log, remysharp.com/2010/10/08/what-is-a-polyfill/.</p>
</aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php"?> 