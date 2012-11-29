<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>jQuery Mobile Docs - Responsive Table</title>
    <link rel="stylesheet"  href="/css/jquery.mobile.css" />
    <link rel="stylesheet" href="/css/jqm-docs.css"/>

    <script src="/js/jquery.js"></script>
    <script src="/js/jqm-docs.js"></script>
    <script src="/js/js.js"></script>

</head>
<body>

   <div data-role="page">

      <div data-role="header" data-theme="f">
      <h1>Responsive Table</h1>
      <a href="../../" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
      <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>
   </div><!-- /header -->

   <div data-role="content">

        <h2>Reflow table mode</h2>
<a href="#popupPadded" data-rel="popup" data-role="button">Popup with padding</a>

<div data-role="popup" id="popupPadded" class="ui-content">
	<p>This is a popup with the <code>ui-content</code> class added to the popup container.</p>
</div>

	<p>The reflow table mode works by collapsing the table columns into a stacked presentation that looks like blocks of label/data pairs for each row. Since the HTML source order of a table prohibits styling a table to look like this,  the plugin dynamically adds a bit of  markup to make the display work (without affecting accessibility). Here is a demo of a table using reflow mode:</p>


    <table data-role="table" id="movie-table" data-mode="reflow" class="breakpoint-stack-wide">
      <thead>
        <tr>
          <th data-priority="1">Rank</th>
          <th data-priority="persist">Movie Title</th>
          <th data-priority="2">Year</th>
          <th data-priority="3"><abbr title="Rotten Tomato Rating">Rating</abbr></th>
          <th data-priority="4">Reviews</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>1</th>
          <td><a href="http://en.wikipedia.org/wiki/Citizen_Kane" data-rel="external">Citizen Kane</a></td>
          <td>1941</td>
          <td>100%</td>
          <td>74</td>
        </tr>
        <tr>
          <th>2</th>
          <td><a href="http://en.wikipedia.org/wiki/Casablanca_(film)" data-rel="external">Casablanca</a></td>
          <td>1942</td>
          <td>97%</td>
          <td>64</td>
        </tr>
        <tr>
          <th>3</th>
          <td><a href="http://en.wikipedia.org/wiki/The_Godfather" data-rel="external">The Godfather</a></td>
          <td>1972</td>
          <td>97%</td>
          <td>87</td>
        </tr>
        <tr>
          <th>4</th>
          <td><a href="http://en.wikipedia.org/wiki/Gone_with_the_Wind_(film)" data-rel="external">Gone with the Wind</a></td>
          <td>1939</td>
          <td>96%</td>
          <td>87</td>
        </tr>
        <tr>
          <th>5</th>
          <td><a href="http://en.wikipedia.org/wiki/Lawrence_of_Arabia_(film)" data-rel="external">Lawrence of Arabia</a></td>
          <td>1962</td>
          <td>94%</td>
          <td>87</td>
        </tr>
        <tr>
          <th>6</th>
          <td><a href="http://en.wikipedia.org/wiki/Dr._Strangelove" data-rel="external">Dr. Strangelove Or How I Learned to Stop Worrying and Love the Bomb</a></td>
          <td>1964</td>
          <td>92%</td>
          <td>74</td>
        </tr>
        <tr>
          <th>7</th>
          <td><a href="http://en.wikipedia.org/wiki/The_Graduate" data-rel="external">The Graduate</a></td>
          <td>1967</td>
          <td>91%</td>
          <td>122</td>
        </tr>
        <tr>
          <th>8</th>
          <td><a href="http://en.wikipedia.org/wiki/The_Wizard_of_Oz_(1939_film)" data-rel="external">The Wizard of Oz</a></td>
          <td>1939</td>
          <td>90%</td>
          <td>72</td>
        </tr>
        <tr>
          <th>9</th>
          <td><a href="http://en.wikipedia.org/wiki/Singin%27_in_the_Rain" data-rel="external">Singin' in the Rain</a></td>
          <td>1952</td>
          <td>89%</td>
          <td>85</td>
        </tr>
        <tr>
          <th>10</th>
          <td class="title"><a href="http://en.wikipedia.org/wiki/Inception" data-rel="external">Inception</a></td>
          <td>2010</td>
          <td>84%</td>
          <td>78</td>
        </tr>
      </tbody>
    </table>

	<!-- We're using a style block to make it easy to view the custom styles -->
	<!-- In production, these should be added to an custom.css file loaded in the head -->
	<style>
	/* Media query to show as a standard table at wider widths */
	@media ( min-width: 30em ) {
		/* Show the table header rows */
		.movies-stack td,
		.movies-stack th,
		.movies-stack tbody th,
		.movies-stack tbody td,
		.movies-stack thead td,
		.movies-stack thead th {
			display: table-cell;
			margin: 0;
		}
		/* Hide the labels in each cell */
		.movies-stack td .ui-table-cell-label,
		.movies-stack th .ui-table-cell-label {
			display: none;
		}
	}
	</style>


         </div><!-- /content -->

         <div data-role="footer" class="footer-docs" data-theme="c">
               <p class="jqm-version"></p>
            <p>&copy; 2012 jQuery Foundation and other contributors</p>
         </div>

         </div><!-- /page -->

</body>
</html>






