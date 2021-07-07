const pageable = new Pageable("main", {
	animation: 1000,
	delay: 300,
	onBeforeStart: function() {
		this.pages.forEach((page, i) => {
			page.classList.remove("pg-active");
		});	
	}	
});