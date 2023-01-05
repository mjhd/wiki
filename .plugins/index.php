<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="apple-touch-icon" sizes="180x180" href=".assets/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href=".assets/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href=".assets/favicon-16x16.png">
<link rel="manifest" href=".assets/site.webmanifest">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="theme-color" content="#ffffff">

<title>Big box of doo</title>
<link id="faviconLink" rel="stylesheet" type="text/css" href=".assets/pluggy_box.css" />
</head>
<body class="pluggy_box_page">
<script type="text/javascript" src=".assets/pluggy_box_sidebar_data.js"></script>

<script type="text/javascript">

// constructor for pluggy box buttons

function pluggy_box_page_construct(id, icon_path, plugin_url){

    var pluggy_box_button = document.createElement("a")
    pluggy_box_button.id = id
    pluggy_box_button.href = plugin_url
    pluggy_box_button.classList.add("pluggy_box_button")

    pluggy_box_logo = document.createElementNS("http://www.w3.org/2000/svg", "svg")
    pluggy_box_logo.setAttribute("width", "24")
    pluggy_box_logo.setAttribute("height", "24")
    pluggy_box_logo.setAttribute("fill-rule", "evenodd")
    pluggy_box_logo.setAttribute("clip-rule", "evenodd")

    pluggy_box_path = document.createElementNS("http://www.w3.org/2000/svg", "path")
    pluggy_box_path.setAttribute("d", icon_path)

    pluggy_box_logo.append(pluggy_box_path)
    pluggy_box_button.append(pluggy_box_logo)
    pluggy_box_button.addEventListener('click', function(event){ parent.add_widget_state(event.target.id) })
    return pluggy_box_button
}

var pluggy_box_page = document.createElement("div")
pluggy_box_page.id = "pluggy_box_page"

//pluggy_box_sidebar_plugin_data is attached above from pluggy_box_sidebar_data.js

for (var pluggy_plugin of pluggy_box_sidebar_plugin_data)
    pluggy_box_page.append(pluggy_box_page_construct(pluggy_plugin[0], pluggy_plugin[1], pluggy_plugin[2]))

window.addEventListener("load", function(){
    document.body.append(pluggy_box_page)
})

</script>
</body></html>