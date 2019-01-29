/*
    Elfsight Form Builder
    Version: 1.0.1
    Release date: Fri Oct 05 2018

    https://elfsight.com

    Copyright (c) 2018 Elfsight, LLC. ALL RIGHTS RESERVED
*/

!function(wp,$){let IconBlock=function(e){return wp.element.createElement("svg",{xmlns:"http://www.w3.org/2000/svg","xmlns:xlink":"http://www.w3.org/1999/xlink",width:"20",height:"20",viewBox:"0 0 20 20",class:"dashicon"},[wp.element.createElement("path",{id:"a",d:"M6.59 5.005l-.168.068a.525.525 0 0 0 0 .973l3.083 1.255c.317.13.673.13.99 0l3.083-1.255a.525.525 0 0 0 0-.973l-.168-.068-2.915 1.186c-.317.13-.673.13-.99 0L6.59 5.005zm0 1.942l-.168.069a.525.525 0 0 0 0 .973l3.083 1.255c.317.129.673.129.99 0l3.083-1.255a.525.525 0 0 0 0-.973l-.168-.069-2.915 1.186c-.317.13-.673.13-.99 0L6.59 6.947zM5.177 0h9.646c1.16 0 2.1.93 2.1 2.076v15.848c0 1.147-.94 2.076-2.1 2.076H5.177c-1.16 0-2.1-.93-2.1-2.076V2.076C3.077.929 4.017 0 5.177 0zm1.245 3.13a.525.525 0 0 0 0 .974l3.083 1.254c.317.13.673.13.99 0l3.083-1.254a.525.525 0 0 0 0-.973l-3.083-1.255a1.313 1.313 0 0 0-.99 0L6.422 3.131zm-1.747 7.923v6.33c0 .573.47 1.038 1.05 1.038h8.55c.58 0 1.05-.465 1.05-1.038v-6.33H4.675zm2.396 1.579h5.858c.441 0 .799.353.799.79a.795.795 0 0 1-.799.789H7.071a.794.794 0 0 1-.799-.79c0-.436.358-.79.799-.79zm0 2.631h5.858c.441 0 .799.354.799.79 0 .436-.358.79-.799.79H7.071a.794.794 0 0 1-.799-.79c0-.436.358-.79.799-.79z"})])};if(void 0===wp.components)return!1;const{__:__}=wp.i18n,el=wp.element.createElement,registerBlockType=wp.blocks.registerBlockType,ServerSideRender=wp.components.ServerSideRender;function initWidget(){setTimeout(function(){$("[data-elfsight-form-builder-options]").each(function(){var options=$(this).attr("data-elfsight-form-builder-options"),data=JSON.parse(decodeURIComponent(options)),jsInitFunc="$(this).eappsFormBuilder(data)";eval(jsInitFunc).removeAttr("data-elfsight-form-builder-options").data("elfsight-options",options),$(this).parents(".elfsight-block-widget-container").toggleClass("elfsight-block-widget-initialized",!0)})},1500)}class Widget extends React.Component{componentDidMount(){initWidget()}componentDidUpdate(){initWidget()}render(){return this.props.id?el("div",{className:"elfsight-block-widget-container"},el(ServerSideRender,{block:"elfsight-form-builder/block",attributes:{id:this.props.id}}),el("div",{className:"elfsight-block-widget-placeholder"},el(IconBlock,{}),el("span",{},"Elfsight Form Builder"))):[]}}class Button extends React.Component{render(){var e=document.location.origin+document.location.pathname.replace("post.php","admin.php")+"?page=elfsight-form-builder#";return el("a",{href:e+this.props.href,target:"_blank",className:this.props.className},this.props.text)}}class WidgetSelect extends React.Component{constructor(){super(),this.state={widgets:[]}}setWidget(e){e.preventDefault();var t=e.target.querySelector("option:checked");this.props.setAttributes({id:t.value})}componentDidMount(){$.get(ajaxurl,{action:"elfsight-form-builder".replace(/-/g,"_")+"_widgets_api",endpoint:"list"}).then(e=>{if(e.status){this.setState({widgets:e.data});var t=e.data.reduce(function(e,t){return e[t.id]=t,e},{}),i=!(!t[this.props.id]||"1"!==t[this.props.id].active);!i&&e.data[0]?(this.props.setAttributes({id:parseInt(e.data[0].id)}),this.props.setAttributes({exist:!0})):this.props.setAttributes({exist:i})}})}render(){return this.state.widgets.length>0?el("div",{className:"components-base-control"},el("div",{className:"components-base-control__field"},el("select",{className:"components-select-control__input",id:"elfsight-form-builder-block-control-id",value:this.props.id,onChange:this.setWidget.bind(this)},this.state.widgets.map(e=>wp.element.createElement("option",{value:e.id},[e.name]))))):[]}}registerBlockType("elfsight-form-builder/block",{title:"Elfsight Form Builder",description:"Collect more data from your clients through various fill-in forms",icon:{src:IconBlock},category:"widgets",keywords:["Elfsight Form Builder","Elfsight"],supports:{html:!1},attributes:{id:{type:"integer",default:1},exist:{type:"bool",default:!1}},edit:function(e){const{attributes:{id:t,exist:i},setAttributes:s}=e;return el(wp.element.Fragment,{},el(wp.editor.InspectorControls,{},el(wp.components.PanelBody,{className:"elfsight-block-panel",title:"Select widget"},el(WidgetSelect,{id:t,setAttributes:function(t){e.setAttributes(t)}}),i?el("div",{className:"elfsight-block-panel-group"},el(Button,{href:"/edit-widget/"+t,className:"components-button is-button is-default is-large elfsight-block-panel-button",text:__("Edit Widget")}),el(Button,{href:"/add-widget/",className:"elfsight-block-panel-link",text:__("Create new widget")})):el("div",{className:"elfsight-block-panel-group"},el("span",{},__("No widgets yet")),el(Button,{href:"/add-widget/",className:"components-button is-button is-default is-primary is-large elfsight-block-panel-button",text:__("Create Widget")})))),i?el(Widget,{id:t,exist:i}):null,i?null:el("div",{className:"elfsight-block-form"},el("div",{className:"elfsight-block-form-header"},el(IconBlock,{}),el("span",{},"Elfsight Form Builder")),el("div",{className:"elfsight-block-form-text"},__("Collect more data from your clients through various fill-in forms"),el("br"),el("strong",{},__("Let's create your first widget!"))),el(Button,{href:"/add-widget/",className:"components-button is-button is-default is-primary is-large elfsight-block-form-button",text:__("Create Widget")})))},save:function(){return null}})}(wp,jQuery);