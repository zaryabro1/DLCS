var isMobile = {
	Android: function() {
		return navigator.userAgent.match(/Android/i);
	},
	BlackBerry: function() {
		return navigator.userAgent.match(/BlackBerry/i);
	},
	iOS: function() {
		return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	},
	Opera: function() {
		return navigator.userAgent.match(/Opera Mini/i);
	},
	Windows: function() {
		return navigator.userAgent.match(/IEMobile/i);
	},
	MSEdge: function() {
		return navigator.userAgent.match('/Edge\/\d+');
	},
	any: function() {
		return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	}
};

$(document).ready(function(){
	if( isMobile.any() ) {
		$('body').addClass('mobile');
	} else {
		$('body').addClass('desktop');
	};
	if( isMobile.iOS() ) {
		$('body').addClass('ios');
	};
	if( isMobile.MSEdge() ) {
		$('body').addClass('ms-edge');
	};
});