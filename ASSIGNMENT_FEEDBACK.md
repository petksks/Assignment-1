Hi Peter,

Nice work!

I've made a few comments below - the contact from action is a requirement and the coding style is also a issue.

It's well beyond clear to see that you know what you are doing but I have to be equal to everyone, so right now you have a Godkänt grade but I need some things fixed before I can assess this as a VG.

If you are happy with the G that's fine, if you want tha VG then update the project and let me know when to take another look. Either way please let me know.

*************************************

CRITERIA FOR GRADING

*************************************

GODKÄNT:
-------------------------------------

3 separate pages: ✅
"Download" and "about" should be removed from the menu!

A header with a page title on every page: ✅ ❌
"Home" has 3 h1s - google's SEO looks for one and only one unique h1 on every page.

A navigational menu every page with links to the other pages: ✅ 
On "Blog" the home menu item leads to index.html and 404s

Contact form:
    Email: ✅
    Message: ✅
    Required: ✅
    Mail to: ❌
    Change the form action so it launches an email client

RWD:
    Desktop: ✅
    Mobile: ✅
    On the contact page the email breaks the layout

External CSS: ✅

-------------------------------------

VÄLGODKÄNT:
-------------------------------------

Current page indication in the menu: ❌

Responsive Image: ✅

RWD:
  Media Query: ✅
  Since you have 1 stylesheet you only need 1, you have 5 of the same value! I see what you are trying too do, but read on
  Flex/Grid: ✅
  Very nice!

Separate CSS: ❌ ✅
  The idea here is to have one (or more) general style sheet for the elements common to every page - header, navigation etc - then have page specific stylesheets for individual pages.
  Currently the homepage loads css for a contact form that doesn't exist on the page.
  This will also help with the duplicate media queries - each page only needs one of each value. 
  Semantic: ✅

Semantic Element naming: ✅

Code Style:
  HTML: ✅ ❌
  CSS: ✅ ❌
  Generally good, but the indentation is a bit off. For example line 32 Blog.html:
  <section class="blog-content">
  <div class="row">
  <div class="blog-left">
  Should be 
  <section class="blog-content">
      <div class="row">
          <div class="blog-left">
  With everything inside here indented accordingly.
  In the html there's a few empty lines that don't serve any purpose and should be removed

  CSS alternates between 2 and 4 space indenting, and a lot of the 2 spaces indents start 2 spaces in. Each selector should start at space 0.
