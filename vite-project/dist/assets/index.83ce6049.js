!function(e=".",t="__import__"){try{self[t]=new Function("u","return import(u)")}catch(o){const n=new URL(e,location),r=e=>{URL.revokeObjectURL(e.src),e.remove()};self[t]=e=>new Promise(((o,a)=>{const l=new URL(e,n);if(self[t].moduleMap[l])return o(self[t].moduleMap[l]);const s=new Blob([`import * as m from '${l}';`,`${t}.moduleMap['${l}']=m;`],{type:"text/javascript"}),c=Object.assign(document.createElement("script"),{type:"module",src:URL.createObjectURL(s),onerror(){a(new Error(`Failed to import: ${e}`)),r(c)},onload(){o(self[t].moduleMap[l]),r(c)}});document.head.appendChild(c)})),self[t].moduleMap={}}}("assets/");document.querySelector("#app").innerHTML='\n  <h1>Hello !</h1>\n  <a href="https://vitejs.dev/guide/features.html" target="_blank">Documentation</a>\n';
