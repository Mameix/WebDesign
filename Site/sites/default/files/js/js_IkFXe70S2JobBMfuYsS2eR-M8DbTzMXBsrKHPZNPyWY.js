/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.upjv = {
    attach: function (context, settings) {
		window.addEventListener('load', function () {
		  	var path = window.location.pathname;
			const chemin = path.split('/');
			const onglet = chemin[chemin.length-2];
			const page = chemin[chemin.length-1];
			document.getElementById('bandeau').innerHTML = "<div><img alt=\""+page+"\" class=\"w-100 mx-auto imgOffre\" src=\"/themes/upjv/img/"+onglet+"/"+page+".png\" /></div>"
		});
    }
  };

})(jQuery, Drupal, drupalSettings);
;
