=== FC's Mortgage Calculator ===
Contributors: financialcalculators
Donate link: nada
Tags: calculator, loan, mortgage, mortgage calculator, mortgage loan calculator, amortization, amortization schedule, plugin, sidebar, widget
Requires at least: 2.0.1
Tested up to: 4.7
Stable tag: 1.1.2
License: GNU General Public License
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html

Calculates loan payment and optionally down payment, affordable price, taxes, points and PMI. Includes schedule. Supports international conventions.

== Description ==

[FC's Mortgage Calculator Plugin](https://financial-calculators.com/calculator-plugins/mortgage-calculator-plugin) can calculate a number of unknown values including affordable home price, monthly loan payment or percentage of cost available as down payment. It can create a detailed amortization schedule with date based payments and charts. The calculator optionally supports points, private mortgage insurance (PMI), property taxes and hazard insurance. Your site's visitors can select their own currency and date convention used in the loan schedule. This is ideal if your site attracts visitors from around the globe. Select from one of four predefined sizes or you can modify CSS file to customize size and colors. Supports touch devices and a responsive websites. This plugin is based on and uses the code from my [Mortgage Calculator](https://financial-calculator.com/mortgage-calculator).

*Rebranding with your site's brand name is supported and encouraged.*

The plugin may be used (a) in a post or page's content area via a *shortcode*; or (b) used in a *sidebar widget area*; or (c) called from any template file. See __usage__ under installation for details.


**Installation**

Either (a) upload the *fc-mortgage-calculator* folder with all its files to the */wp-content/plugins/* folder or (b) unzip the plugin's zip file in the */wp-content/plugins/* folder.

Activate the plugin through the *Plugins -> Installed Plugins* menu in WordPress


*Usage*

There are 3 mutually exclusive ways you can deploy the calculator to an individual page (though you can use all three methods on different pages within a site):

1. If you are using widgets, just add the plugin to the sidebar through the Appearance -> Widgets menu in WordPress. Be sure to click *Save*.
1. Add the following code *&lt;?php show_fcmortgage_plugin(); ?&gt;* to your template where you want the calculator to appear. See below for options.
1. Add the shortcode *[fcmortgageplugin]* in the content area of your page or post and configure shortcode parameters.

__Shortcode parameters__

	* sc_size= tiny | small | medium | large
	* sc_custom_style= No | Yes
	* sc_add_link= No | Yes
	* sc_brand_name= 
	* sc_hide_resize= No | Yes
	* sc_price=
	* sc_pct_dwn=
	* sc_loan_amt=
	* sc_n_months=
	* sc_rate=
	* sc_points=
	* sc_taxes=
	* sc_insurance=
	* sc_pmi=
	

Examples (1st includes all options):

`[fcmortgageplugin sc_size="medium" sc_custom_style="No" sc_add_link="No" sc_brand_name="" sc_hide_resize="No" sc_price="355000.0" sc_pct_dwn="15.0" sc_loan_amt="0.0" sc_n_months="360" sc_rate="5.5" sc_points="0" sc_taxes="6000" sc_insurance="600" sc_pmi="0"]`

`[fcmortgageplugin sc_size="small" sc_custom_style="Yes" sc_hide_resize="Yes"]`

`[fcmortgageplugin sc_custom_style="No" sc_add_link="Yes" sc_brand_name="Friendly Mortgage" sc_hide_resize="Yes" sc_price="275400" sc_pct_dwn="20.0" sc_loan_amt="0.0" sc_n_months="180" sc_rate="5.5"]`

__Optional array parameter passed to *show_fcmortgage_plugin()*__

Valid values for options are the same as the shortcode above.

	<?php show_fcmortgage_plugin(array('op_size' => "medium",
			'op_custom_style' => "No",
			'op_add_link' => "Yes",
			'op_brand_name' => "Karl's",
			'op_hide_resize' => "No",
			'op_price' => "350000.00",
			'op_pct_dwn' => "20.0",
			'op_loan_amt' => "0.00",
			'op_n_months' => "180",
			'op_rate' => "5.5",
			'op_points' => "2.5",
			'op_taxes' => "12000.0",
			'op_insurance' => "1200.0",
			'op_pmi' => "0.0")); ?>

*Notes:*

1. If you want to add your brand to the calculator, the *_add_link option must be set to "Yes" (i.e. create a subtle follow link to financial-calculators.com). 
1. When branding, the brand name will be added before "Mortgage Loan Calculator".
1. If _custom_style is set to "Yes", the plugin will load fin-calc-widgets-custom.css located in the plugin's CSS folder. If you set the option to "Yes" without making any changes, the calculator will change to a horrendous red which indicates the custom css is being used.
1. The plugin is built and tested on HTML5/CSS3 pages.
1. size (max-width): large: 440px, medium: 340px, small: 290px, tiny: 150px
1. Currently, it is not possible to use more than one of my calculators on a single web page. Putting more than one calculator on a page will cause conflicts.

*Roadmap:*

1. Redesign that allows multiple calculators to work on the same web page.
1. Allow website owner to select a default currency and date format. (This can now be done by patching the code.)
1. Give website owners the ability to not let their visitors change the default date format or currency.

Contact me if you would like to help test any of these new features.

*Other Calculators*

As of this writing, financial-calculators.com has seven plugins listed in the WordPress Plugin Directory with several more available on the website. All plugins have the same general feature set and are consistent in their styling and the way they work. This means you can install all these plugins and maintain a consistent look and feel across your website or blog. If you blog about money, you are encouraged to install all the plugins on your site. It's simple. The more pages, the more opportunity.

Below links take you to the indicated WordPress Plugin Directory page.

1. [Auto Loan Calculator](https://wordpress.org/plugins/fc-auto-loan-calculator/) - solves for several unknowns and creates a payment schedule.
1. [Loan Calculator](https://wordpress.org/plugins/fc-loan-calculator/) - a general purpose loan calculator with amortization schedule and charts.
1. [Retirement Age Calculator](https://wordpress.org/plugins/fc-retirement-age-calculator/) - answers, at what age will I be able to retire given my investment plan?
1. [Retirement Nest Egg Calculator](https://wordpress.org/plugins/fc-retirement-nest-egg-calculator/) - answers, what will be the value of my retirement fund when I retire?
1. [Retirement Savings Calculator](https://wordpress.org/plugins/fc-retirement-savings-calculator/) - how much do I have to invest periodically to reach my retirement goal?
1. [Savings Calculator](https://wordpress.org/plugins/fc-savings-calculator/) - calculates the results of regular savings and investing


== Frequently Asked Questions ==

__Can the Mortgage Calculator plugin be used on a commercial website?__

Yes. I would be honored. Thanks.

Also, if you happen to be a financial blogger, I would encourage you to add a "Calculators" or "Tools" section to your site and include all my calculators. More content equals more opportunity. I expect to have six free plugins by early 2017.

__Does your plugin have any embedded advertising?__

Absolutely not.

__Is your plugin self contained?__

Yes. 100% of the plugin is installed on your server. There are no external dependencies.

__Does the plugin include any backlinks?__

No, not by default. If you decide to brand the calculator with your brand and / or set the *add_link* option to *Yes*, two very discreet links are added to my site. (User will not know there are links unless their mouse passes over one.) One anchor is around the copyright in the lower left. The other around the title. Of course you are free to set the *_add_link* option to *Yes* even if you don't rebrand the calculator. :)

__Is the calculator plugin responsive?__

Yes. In fact, I use it on a Bootstrap responsive site. 

__Does the calculator support touch devices?__

Yes. Users use the calculator with all types of devices.

__Do you offer other calculator plugins?__

Yes. I have a conventional [Loan Calculator](https://wordpress.org/plugins/fc-loan-calculator/) hosted in this directory. And here is my [widgets and plugin](https://financial-calculators.com/widgets-and-wordpress-plugins) page where you'll find other free plugins as well as some "plus" versions which are free for a limited time only.

__I like your plugin and I'd like to contribute something but I notice you don't have a link for contributions, why not?__

Thank you. That's very kind of you. Actually, you can contribute, and it won't cost you a cent. Please stop by my [website](https://financial-calculators.com) and check it out. In addition to providing some very advanced calculators, I think that I'm the only one that hosts a public question and answer site to provide support for their calculators. Take a look, and if you like what you see, please spread the word. That's better than any monetary compensation.

__The plugin version indicates it is new. Can I trust it?__

Yes. While this is a new plugin, the calculator has been used on my site for years. It has been used by literally 100,000's of users. Any issues you might encounter would most likely be around installing it on a site. Should you run into an problem, I'm happy to help resolve it.


== Screenshots ==

1. The Mortgage Calculator's front end showing 2 of the 4 configurable sizes, one with custom brand and no sizing buttons.
2. Loan payment schedule shown in a lightbox. User can select how date is displayed from 3 international date conventions.
3. Three charts shown in a lightbox.
4. Plugin's settings dialogue, as seen under *Appearance* *Widgets* page in WordPress's administration area.

== Changelog ==

= 1.1.2 =
* Updated the CSS so as to resolve a few reported compatibility issues with some sites.
* Improved layout of international date and currency selection dialogue.

= 1.1.1 =
* Fixed - some installations the currency / date dialogue was not accessible because the background overlay was on top of the dialogue.
* Fixed - some installations the Help text was visible on the main page and not just when the Help button was clicked
* Fixed - missing "+" "-" signs for the optional resizing feature

= 1.1 =
* Improved styling
* Converted project to use a single file CSS regardless of calculator size selected. Single file will be compatible across all financial-calculator.com plugins so site owners can modify style once and copy to all other plugins.

= 1.0.2 =
* Fixed readme.txt, 2 errant commas in source and optional copyright backlinks.

= 1.0 =
*	First release

== Upgrade Notice ==
No upgrades.
