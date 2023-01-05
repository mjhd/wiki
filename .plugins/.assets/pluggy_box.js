
// CORE:

// Build pluggy box frame panel and add blank frame to it (sits directly above <body> in DOM)

var pluggy_box_panel = document.createElement("section")
pluggy_box_panel.id = "pluggy_box_panel"

var pluggy_box_frame = document.createElement("iframe")
pluggy_box_frame.src = "about:blank"

var pluggy_box_frame_close = document.createElement("aside")
pluggy_box_frame_close.id = "pluggy_box_frame_close"
pluggy_box_frame_close.innerText = "X"
pluggy_box_frame_close.addEventListener("click", function(event){
    pluggy_box_panel.classList.remove("active")
    var current_active_plugin = document.getElementById('pluggy_box_sidebar').getElementsByClassName('current')[0]
    if (typeof(current_active_plugin) != 'undefined' && current_active_plugin != null)
        current_active_plugin.classList.remove("current")
})

pluggy_box_panel.append(pluggy_box_frame_close)
pluggy_box_panel.append(pluggy_box_frame)



document.head.parentNode.insertBefore(pluggy_box_panel, document.head.nextSibling)


// Build pluggy box sidebar for plugin buttons


var pluggy_box_sidebar = document.createElement("div")
pluggy_box_sidebar.id = "pluggy_box_sidebar"

var pluggy_box_sidebar_menu = document.createElement("aside")
pluggy_box_sidebar_menu.id = "pluggy_box_sidebar_menu"


var pluggy_box_plugins_fullpage = document.createElement("div")
var pluggy_box_stated_plugin_kill = document.createElement("div")
pluggy_box_plugins_fullpage.id = "pluggy_box_plugins_fullpage"
pluggy_box_stated_plugin_kill.id = "pluggy_box_stated_plugin_kill"
pluggy_box_plugins_fullpage.innerHTML = '&#8632;&#10;'
pluggy_box_stated_plugin_kill.innerHTML = 'X&#10;'

pluggy_box_plugins_fullpage.addEventListener('click', function(){
    var pluggy_box_panel_container = document.getElementById('pluggy_box_panel')
    pluggy_box_panel_container.firstElementChild.nextElementSibling.src = '.plugins'
    pluggy_box_panel_container.classList.add('active')

    var pluggy_box_sidebar_container = document.getElementById('pluggy_box_sidebar')
    var current_active_plugin = pluggy_box_sidebar_container.getElementsByClassName('state')[0]
    pluggy_box_sidebar_container.classList.remove('state')
    if (typeof(current_active_plugin) != 'undefined' && current_active_plugin != null)
        current_active_plugin.classList.remove('state', 'current')
})
pluggy_box_stated_plugin_kill.addEventListener('click', function(){
    var pluggy_box_panel_container = document.getElementById('pluggy_box_panel')
    pluggy_box_panel_container.classList.remove('active')
    pluggy_box_panel_container.firstElementChild.nextElementSibling.src = 'about:blank'
    pluggy_box_panel_container.firstElementChild.nextElementSibling = null;

    var pluggy_box_sidebar_container = document.getElementById('pluggy_box_sidebar')
    var current_active_plugin = pluggy_box_sidebar_container.getElementsByClassName('state')[0]
    pluggy_box_sidebar_container.classList.remove('state')
    if (typeof(current_active_plugin) != 'undefined' && current_active_plugin != null)
        current_active_plugin.classList.remove('state', 'current')
})


pluggy_box_sidebar_menu.append(pluggy_box_plugins_fullpage)
pluggy_box_sidebar_menu.append(pluggy_box_stated_plugin_kill)
pluggy_box_sidebar.append(pluggy_box_sidebar_menu)


// constructor for pluggy box buttons -> builds button & attaches to sidebar


function pluggy_box_sidebar_construct(id, icon_path, plugin_url){

    var pluggy_box_button = document.createElement("div")
    pluggy_box_button.id = id
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

    pluggy_box_button.addEventListener("click", function(event){

        var pluggy_box_panel = document.getElementById("pluggy_box_panel")
        var pluggy_box_buttons = Array.prototype.slice.call(document.getElementById("pluggy_box_sidebar").getElementsByClassName("pluggy_box_button"))

        if(!event.currentTarget.classList.contains("current")){
            if(!event.currentTarget.classList.contains("state")){
                pluggy_box_panel.firstElementChild.nextSibling.src = plugin_url
                pluggy_box_buttons.forEach(function(el){ el.classList.remove("state") })
                event.currentTarget.classList.add("state")
                event.currentTarget.parentElement.classList.add("state")
            }
            pluggy_box_buttons.forEach(function(el){ el.classList.remove("current") })
            event.currentTarget.classList.add("current")

            if(!pluggy_box_panel.classList.contains("active"))
                pluggy_box_panel.classList.add("active")
        }
        else{
            pluggy_box_panel.classList.remove("active")
            event.currentTarget.classList.remove("current")
        }
    })

    return pluggy_box_button
}

function add_widget_state(id){
    document.getElementById(id).classList.add('state', 'current')
}


//
//  BEGIN PLUGINS: \\
//




// Pinned tags plugin:

/* To add pinned tags, simply add a new tag widget in the #pinned_tags_entry container on the Welcome Tiddler!! */


var pluggy_box = document.createElement("div")
pluggy_box.id = "pluggy_box"
pluggy_box.classList.add("tc-reveal")

function pinned_tags_build(){
    Array.prototype.slice.call(document.getElementById("pinned_tags_entry").querySelectorAll(".tc-tag-list-item")).forEach(function(el){
		pluggy_box.append(el)
	})
}



// pluggy_box_sidebar_plugin_data is declared in pluggy_box_sidebar_data.js

for (var pluggy_plugin of pluggy_box_sidebar_plugin_data)
    pluggy_box_sidebar.append(pluggy_box_sidebar_construct(pluggy_plugin[0], pluggy_plugin[1], ".plugins/" + pluggy_plugin[2]))

//
//  END PLUGINS  \\
//



// Last Step -> add pluggy_box & friends to DOM:

window.addEventListener("load", function(){
    pinned_tags_build()
	document.getElementsByClassName("tc-site-title")[0].parentElement.parentElement.prepend(pluggy_box)
    document.body.append(pluggy_box_sidebar)
    /*fetch("modder.php")
  .then(function(response) {
    return response.text();
  })
  .then(function(myJson) {
    console.log(myJson);
  });*/
})
