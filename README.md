# Vue.js 3 Tutorial Playlist by Net Ninja

https://www.youtube.com/playlist?list=PL4cUxeGkcC9hYYGbV60Vq3IXYNfDk8At1

# 1) Introduction
* front-end JavaScript/TypeScript framework
* used to create dynamic and data-driven websites (SPA's)
* can also be used to create stand-alone widgets
## Vue Widgets
* drop into any page
* self-contained
## Vue Websites
* SPA: whole website w/ multiple pages & components
* routing done in browser, not on server
* site performs much faster than traditional web sites
* only a single page sent to browser
* Vue handles subsequent requests and routing in situ
## Vue 3 New Features
* composition API: setup() function
* multiple root elements
* teleport component: render content from one component to a different place in the DOM
* suspense component: loading...
* TypeScript support
## Environment Setup

# 2) Vue JS Basics
## Load Vue library
* \<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
## Create app file
* `````
  const app = Vue.createApp({
    // data, functions
    template: '<h2>I am the template</h2>'
  });
  app.mount('#app');```
* write the template in POJO passed to createApp() method; or
* write the template in the mount point 
## Click Events
* v-on: Directive to allow element to react to events
## Conditional Rendering
* v-if=""
* v-show=""

# 3) Vue JS Basics (Part 2) 
## Other Mouse Events
* @mouseover, @mouseleave, @dblclick
* when no parameters passed, the event passed implicitly as first (and only) parameter
* when parameters are passed, the event must be passed as $event
## Outputing Lists
* v-for
## Attribute Binding
* Bind dynamic values to HTML attributes
* eg: <a v-bind:href={{url}}
* shorthand: :href={{url}}
## Dynamic Classes
:class={ classname : booleanValue }