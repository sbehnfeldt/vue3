# Vue.js 3 Tutorial Playlist by Net Ninja

https://www.youtube.com/playlist?list=PL4cUxeGkcC9hYYGbV60Vq3IXYNfDk8At1

**1) Introduction**
* Vue Widgets: self-contained, drop into any page
* Vue Websites: SPA, whole website, multiple pages & components, routing in browser, 
faster than traditional websites, single page sent to browser, 
* Vue 3 New Features: composition API: setup() function; multiple root elements;
teleport component: render content from one component to a different place in the DOM;
suspense component: "loading..."; TypeScript support


**2) Vue JS Basics (Part 1)**
* Load Vue library: \<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
* Create app file, eg app.js:
```vue
const app = Vue.createApp({
    // data, functions
    template: '<h2>I am the template</h2>'
  });
app.mount('#app');
```
* write the template in POJO passed to createApp() method; or in the mount point 
* Click Events: v-on (react to events)
* Conditional Rendering: v-if="", v-show=""


**3) Vue JS Basics (Part 2)** 
* Other Mouse Events: @mouseover, @mouseleave, @dblclick
* when no parameters passed, the event passed implicitly as first (and only) parameter
* when parameters are passed, the event must be passed as $event
* Outputing Lists: v-for="item in items"
* Attribute Binding: Bind dynamic values to HTML attributes
  * `v-bind:href={{url}}`
  * shorthand: `:href={{url}}`
* Dynamic Classes
  * `:class={ classname : booleanValue }`

**4) Vue CLI and Bigger Projects (part 1)**
* Installing and using Vue CLI
* Generate project scaffolding 
* New project walkthrough: directories and important files explained
* Vue files and templates: .vue files: &lt;template>, &lt;script> and &lt;style> elements
* Template Refs: A handle to an HTML element / DOM element  
* Multiple Components: split Vue app into multiple .vue files
* Project: <Modal> Vue component

**5) Vue CLI and Bigger Projects (part 2)**
* scoped & global CSS
* props: pass data from parent to child component
* emitting custom events
* click event modifiers
* slots
* Challenge: create another modal
* using teleport

**6) Build a Reaction Timer Game**
* Project preview and setup (from CLI - "vue create reaction-timer"
* Starting a new game
* Lifecycle hooks
* Creating a timer
* Custom events with data
* Challenge - showing a results component
* Finishing touches

**7) Forms & Inputs**
* Create a new project
* Create a signup form
* VModel
* v-model with &lt;select&gt;
* checkboxes
* keyboard events and modifier
* challenge: delete chips from list
* submitting forms

**8) The Vue Router**
* Why use the router?
* Vue router setup for new projects 
* Router links
* Folder structure
* Route parameters
* Dynamic links
* Redirects and 404s
* Programmatic navigation
* 
