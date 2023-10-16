(window["aioseopjsonp"]=window["aioseopjsonp"]||[]).push([["setup-wizard-SmartRecommendations-vue"],{7654:function(t,s,e){"use strict";e("9cc8")},"9cc8":function(t,s,e){},ebcf:function(t,s,e){"use strict";e.r(s);var i=function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"aioseo-wizard-smart-recommendations"},[e("wizard-header"),e("wizard-container",[e("wizard-body",{scopedSlots:t._u([{key:"footer",fn:function(){return[e("div",{staticClass:"go-back"},[e("router-link",{staticClass:"no-underline",attrs:{to:t.getPrevLink}},[t._v("←")]),t._v("   "),e("router-link",{attrs:{to:t.getPrevLink}},[t._v(t._s(t.strings.goBack))])],1),e("div",{staticClass:"spacer"}),e("base-button",{attrs:{type:"gray",tag:"router-link",to:t.getNextLink}},[t._v(t._s(t.strings.skipThisStep))]),e("base-button",{attrs:{type:"blue",loading:t.loading},on:{click:t.saveAndContinue}},[t._v(t._s(t.strings.saveAndContinue)+" →")])]},proxy:!0}])},[e("wizard-steps"),e("div",{staticClass:"header"},[t._v(" "+t._s(t.strings.setupSiteAnalyzer)+" ")]),e("div",{staticClass:"description"},[t._v(" "+t._s(t.strings.description)+" ")]),e("div",{staticClass:"aioseo-settings-row no-border small-padding"},[e("div",{staticClass:"settings-name"},[e("div",{staticClass:"name small-margin"},[t._v(" "+t._s(t.strings.yourEmailAddress)+" ")])]),e("base-input",{attrs:{size:"medium"},model:{value:t.smartRecommendations.accountInfo,callback:function(s){t.$set(t.smartRecommendations,"accountInfo",s)},expression:"smartRecommendations.accountInfo"}}),e("div",{staticClass:"aioseo-description"},[t._v(" "+t._s(t.strings.yourEmailIsNeeded)+" ")])],1),t.$isPro?t._e():e("div",{staticClass:"aioseo-settings-row no-border no-margin small-padding"},[e("div",{staticClass:"settings-name"},[e("div",{staticClass:"name small-margin"},[t._v(" "+t._s(t.strings.helpMakeAioseoBetter)+" "),e("core-tooltip",{scopedSlots:t._u([{key:"tooltip",fn:function(){return[e("div",{domProps:{innerHTML:t._s(t.strings.usageTrackingTooltip)}})]},proxy:!0}],null,!1,1886299547)},[e("svg-circle-question-mark")],1)],1)]),e("base-toggle",{model:{value:t.smartRecommendations.usageTracking,callback:function(s){t.$set(t.smartRecommendations,"usageTracking",s)},expression:"smartRecommendations.usageTracking"}},[t._v(" "+t._s(t.strings.yesCountMeIn)+" ")])],1)],1),e("wizard-close-and-exit")],1),t.showModal?e("core-modal",{attrs:{"no-header":""},scopedSlots:t._u([{key:"body",fn:function(){return[e("div",{staticClass:"aioseo-modal-body"},[e("button",{staticClass:"close",on:{click:function(s){s.stopPropagation(),t.showModal=!1}}},[e("svg-close",{on:{click:function(s){t.showModal=!1}}})],1),e("h3",[t._v(t._s(t.strings.wouldYouLikeToPurchase))]),e("div",{staticClass:"available-features",domProps:{innerHTML:t._s(t.strings.theseFeaturesAreAvailable)}}),t._l(t.getSelectedUpsellFeatures,(function(s,i){return e("div",{key:i,staticClass:"aioseo-settings-row feature-grid small-padding medium-margin"},[e("grid-row",[e("grid-column",{attrs:{xs:"11"}},[e("div",{staticClass:"settings-name"},[e("div",{staticClass:"name small-margin"},[t._v(" "+t._s(s.name)+" "),t.needsUpsell(s)?e("core-pro-badge"):t._e()],1),e("div",{staticClass:"aioseo-description-text"},[t._v(" "+t._s(s.description)+" ")])])]),e("grid-column",{attrs:{xs:"1"}},[e("base-checkbox",{staticClass:"no-clicks",attrs:{round:"",type:"green",value:!0},nativeOn:{click:function(s){return t.preventUncheck.apply(null,arguments)}}})],1)],1)],1)})),e("div",{staticClass:"available-features no-access",domProps:{innerHTML:t._s(t.strings.youWontHaveAccess)}}),e("div",{staticClass:"actions"},[e("div",{staticClass:"spacer"}),e("div",{staticClass:"go-back"},[e("router-link",{attrs:{to:t.getNextLink}},[t._v(t._s(t.strings.illDoItLater))])],1),e("base-button",{attrs:{type:"green",loading:t.loadingModal},on:{click:t.purchase}},[t._v(t._s(t.strings.purchaseAndInstallNow))])],1),e("core-alert",{attrs:{type:"yellow"},domProps:{innerHTML:t._s(t.strings.bonusText)}})],2)]},proxy:!0}],null,!1,721331571)}):t._e()],1)},a=[],n=e("5530"),o=(e("159b"),e("7db0"),e("a15b"),e("d81d"),e("9c0e")),r=e("2f62"),l={mixins:[o["r"]],data:function(){return{loading:!1,stage:"smart-recommendations",showModal:!1,loadingModal:!1,strings:{setupSiteAnalyzer:this.$t.__("Setup Site Analyzer + Smart Recommendations",this.$td),description:this.$t.sprintf(this.$t.__("Get helpful suggestions from %1$s on how to optimize your website content, so you can rank higher in search results.",this.$td),"AIOSEO"),yourEmailAddress:this.$t.__("Your Email Address",this.$td),yourEmailIsNeeded:this.$t.__("Your email is needed so you can receive SEO recommendations. This email will also be used to connect your site with our SEO API.",this.$td),helpMakeAioseoBetter:this.$t.sprintf(this.$t.__("Help make %1$s better for everyone",this.$td),"AIOSEO"),yesCountMeIn:this.$t.__("Yes, count me in",this.$td),wouldYouLikeToPurchase:this.$t.__("Would you like to purchase and install the following features now?",this.$td),theseFeaturesAreAvailable:this.$t.__("An upgrade is required to unlock the following features.",this.$td),youWontHaveAccess:this.$t.__("You won't have access to this functionality until the extensions have been purchased and installed.",this.$td),illDoItLater:this.$t.__("I'll do it later",this.$td),purchaseAndInstallNow:this.$t.__("Purchase and Install Now",this.$td),bonusText:this.$t.sprintf(this.$t.__("%1$sBonus:%2$s You can upgrade your plan today and %3$ssave %4$s off%5$s (discount auto-applied).",this.$td),"<strong>","</strong>","<strong>","50%","</strong>"),usageTrackingTooltip:this.$t.sprintf(this.$t.__("Complete documentation on usage tracking is available %1$shere%2$s.",this.$td),this.$t.sprintf('<strong><a href="%1$s" target="_blank">',this.$links.getDocUrl("usageTracking")),"</a></strong>")}}},computed:Object(n["a"])(Object(n["a"])(Object(n["a"])({},Object(r["e"])(["internalOptions"])),Object(r["e"])("wizard",{smartRecommendations:"smartRecommendations",presetFeatures:"features"})),{},{selectedFeaturesNeedsUpsell:function(){var t=this,s=!1;return this.presetFeatures.forEach((function(e){t.needsUpsell(t.features.find((function(t){return t.value===e})))&&(s=!0)})),s}}),methods:Object(n["a"])(Object(n["a"])(Object(n["a"])({},Object(r["b"])(["saveConnectToken"])),Object(r["b"])("wizard",["saveWizard"])),{},{purchase:function(){this.modalLoading=!0;var t="&license-redirect=".concat(btoa(this.$aioseo.urls.aio.wizard),"#/license-key");window.open("https://aioseo.com/pricing/?features[]="+this.getSelectedUpsellFeatures.map((function(t){return t.value})).join("&features[]=")+t),this.$router.push(this.getNextLink)},saveAndContinue:function(){var t=this;this.loading=!0,this.saveWizard("smartRecommendations").then((function(){if(!t.selectedFeaturesNeedsUpsell)return t.$router.push(t.getNextLink);t.showModal=!0,t.loading=!1}))},preventUncheck:function(t){t.preventDefault(),t.stopPropagation()}}),mounted:function(){this.smartRecommendations.accountInfo=this.$aioseo.user.email}},c=l,d=(e("7654"),e("2877")),u=Object(d["a"])(c,i,a,!1,null,null,null);s["default"]=u.exports}}]);