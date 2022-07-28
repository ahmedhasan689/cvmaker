import{j as g,p as k,v as w,b as s,o as d,g as _,q as x,u as v,c,w as m,a as o,H as y,t as V,m as u,d as r,L as $,n as B,e as C,f as b}from"./app.c4aa48c1.js";import{_ as L,a as q}from"./Guest.3a4f27b0.js";import{_ as N,a as p,b as f}from"./ValidationErrors.07415619.js";import"./ApplicationLogo.97086f23.js";import"./_plugin-vue_export-helper.cdc0426e.js";const R=["value"],S={__name:"Checkbox",props:{checked:{type:[Array,Boolean],default:!1},value:{default:null}},emits:["update:checked"],setup(l,{emit:e}){const i=l,n=g({get(){return i.checked},set(t){e("update:checked",t)}});return(t,a)=>k((d(),_("input",{type:"checkbox",value:l.value,"onUpdate:modelValue":a[0]||(a[0]=h=>x(n)?n.value=h:null),class:"rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"},null,8,R)),[[w,s(n)]])}},U={key:0,class:"mb-4 font-medium text-sm text-green-600"},F=["onSubmit"],P={class:"mt-4"},j={class:"block mt-4"},D={class:"flex items-center"},E=r("span",{class:"ml-2 text-sm text-gray-600"},"Remember me",-1),H={class:"flex items-center justify-end mt-4"},M=b(" Forgot your password? "),z=b(" Log in "),K={__name:"Login",props:{canResetPassword:Boolean,status:String},setup(l){const e=v({email:"",password:"",remember:!1}),i=()=>{e.post(route("login"),{onFinish:()=>e.reset("password")})};return(n,t)=>(d(),c(L,null,{default:m(()=>[o(s(y),{title:"Log in"}),o(N,{class:"mb-4"}),l.status?(d(),_("div",U,V(l.status),1)):u("",!0),r("form",{onSubmit:C(i,["prevent"])},[r("div",null,[o(p,{for:"email",value:"Email"}),o(f,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:s(e).email,"onUpdate:modelValue":t[0]||(t[0]=a=>s(e).email=a),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"])]),r("div",P,[o(p,{for:"password",value:"Password"}),o(f,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:s(e).password,"onUpdate:modelValue":t[1]||(t[1]=a=>s(e).password=a),required:"",autocomplete:"current-password"},null,8,["modelValue"])]),r("div",j,[r("label",D,[o(S,{name:"remember",checked:s(e).remember,"onUpdate:checked":t[2]||(t[2]=a=>s(e).remember=a)},null,8,["checked"]),E])]),r("div",H,[l.canResetPassword?(d(),c(s($),{key:0,href:n.route("password.request"),class:"underline text-sm text-gray-600 hover:text-gray-900"},{default:m(()=>[M]),_:1},8,["href"])):u("",!0),o(q,{class:B(["ml-4",{"opacity-25":s(e).processing}]),disabled:s(e).processing},{default:m(()=>[z]),_:1},8,["class","disabled"])])],40,F)]),_:1}))}};export{K as default};
