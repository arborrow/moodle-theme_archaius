/* --------------------------------------------------------------                                                                                                                                                                                    
        Tabs effect for course's topics
-------------------------------------------------------------- */
$(function(){

	//Script to modify the course content view, add the collapsible 
	//list effect.
	var topics = $('ul.topics'); //unordered list of topics.
	
	//Verify if we are in the man view of chapters.
	if(($("div.summary").length > 2) && (topics.length != 0) 
	   && (activateTopicsCourseMenu == true)){
	    // course sections.
	    var sections = topics.find('li.section.main'); 
	    //General information.
	    var general =  sections.first(); 
	    //fix on the top general information of the course.
	    topics.parent().prepend(general); 
	    general.show();
	    var tabSelector = "h3.sectionname";
	    if(topics.find(tabSelector).length != topics.find("li.section.main").length ){
		tabSelector = "div.summary";
		sections.each(function(){
			$this = $(this);
			if($this.find("h3.sectionname").length == 0){
			    $this.find("div.summary").prepend("<h3> " + $this.find(".left").html() + "</h3>");
			}else{
			    $this.find("div.summary").prepend($this.find("h3.sectionname"));
			}
			
		    });
	    }
	    var topicTab = topics.find(tabSelector);
	    topicTab.addClass("topic-tab");
	    topicTab.prepend("<span class='triangle'></span>");
	    //update the sections variable after prepend the first section.
	    sections = topics.find('li.section.main'); 
	    //put each summary as a tab (outside of the container).
	    sections.each(function(){$(this).before($(this).find(tabSelector))});
	    topicTab.bind("click", function(){
		    var content = $(this).next();
		    if($(this).hasClass("current")){
		        $(this).removeClass("current");
		        content.slideUp();
		    } else {
		        $(this).addClass("current");
		        content.slideDown();
		    }
		});
	    
	}else if(activateTopicsCourseMenu == false){
	    topics.find('li.section.main').show();
	    
	}else{
	    //If there is only one topic, display it.
	    $("li:regex(id,section)").css("display","block");
	}
	
});

