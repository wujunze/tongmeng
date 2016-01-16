/************************************************************************************************
 * jquery.mlens.js
 * http://mlens.musings.it 
 * magnifying lens jQuery plugin for images
 * developed for the project "RubiniFirma" and released as a freebie
 * based on jquery.imageLens.js by http://www.dailycoding.com
 *  
 * mlens supports multiple instances, these are the configurable parameters
 * lensShape: shape of the lens (square or circle)
 * lensSize: lens dimension (in px)
 * borderSize: lens border size (in px)
 * borderColor: lens border color (hex value)
 * borderRadius: lens border radius (if you like rounded corners when the shape is "square")
 * imgSrc: address of the hi-res image
 * lensCss: lens class if you like to style it your own way
 * 
 * @author Federica Sibella
 * Copyright (c) 2012 Federica Sibella - musings(at)musings(dot)it | http://www.musings.it
 * Double licensed MIT or GPLv3.
 * Date: 2012/10/17
 * @version 1.0
 ************************************************************************************************/

(function($){
	// Global variables
	var mlens = [],
		instance = 0;
	var	methods = {
		//function for initializing the lens instance
		init : function(options) {
			this.each(function () {
					// Defaults for lens options
					var defaults = {
						lensShape: "square",
						lensSize: 100,
           				borderSize: 4,
            			borderColor: "#888",
						borderRadius: 0,
						imgSrc: "",
						lensCss: ""
					}, 
					$obj = $(this), 
					data = $obj.data('mlens'), 
					$options = $(), 
					$target = $(),
					$parentDiv = $(),
					$imageTag = $();
					
					$options = $.extend(defaults, options);
					
					if($options.imgSrc == "")
					{
						$options.imgSrc = $obj.attr("src");
					}
					
					//lens style
					var lensStyle = "background-position: 0px 0px;width: " + String($options.lensSize) + "px;height: " + String($options.lensSize) + "px;"
		            				+ "float: left;display: none;border: " + String($options.borderSize) + "px solid " + $options.borderColor + ";"
		            				+ "background-repeat: no-repeat;position: absolute;";
					
					switch($options.lensShape)
					{
						case "square":
						case "":
						default:
							lensStyle = lensStyle + "border-radius:"  + String($options.borderRadius) + "px;";
						break;
						case "circle":
							lensStyle = lensStyle + "border-radius: " + String($options.lensSize / 2 + $options.borderSize) + "px;";
						break;
					}
					
					//lens wrapping div to attach target and hi-res image correctly
					$obj.wrap("<div id='mlens_wrapper_" + instance + "' />");
					$parentDiv = $obj.parent();
					$parentDiv.css({"width":$obj.width()});
					
					$target = $("<div style='" + lensStyle + "' class='" + $options.lensCss + "'>&nbsp;</div>").appendTo($parentDiv);
					$imageTag = $("<img style='display:none;' src='" + $options.imgSrc + "' />").appendTo($parentDiv);
					
		            $target.css({ 
						backgroundImage: "url('" + $options.imgSrc + "')",
						cursor: "none"
					});
		
		            $obj.attr("data-id","mlens_"+instance);
					
					//saving data in mlens instance
					$obj.data('mlens', {
						lens: $obj,
						options: $options,
						target: $target,
						imageTag: $imageTag,
						parentDiv: $parentDiv,
						instance : instance
					});
					
					data = $obj.data('mlens');
					mlens[instance] = data;
					
					//attaching mousemove event both to the target and to the object
					$target.mousemove(function(e)
					{
						$.fn.mlens('move',$obj.attr("data-id"),e);
					});
		            $obj.mousemove(function(e)
					{
						$.fn.mlens('move',$obj.attr("data-id"),e)
					});
					
					//target visibility relies both on its own visibility and that of the original image
					$obj.hover(function()
					{
						$target.show();
					},function()
					{
						$target.hide();
					});
					
					$target.hover(function()
					{
						$target.show();
					},function()
					{
						$target.hide();
					});
					
					//instance increment
					instance++;
				return mlens;
			});
		},
		//function that defines "move" command
		move : function(id,e)
		{
			id = trovaistanza(id);
			//taking parameters values based on the instance
			var data = mlens[id],
				$obj = data.lens,
				$target = data.target,
				$imageTag = data.imageTag,
				offset = $obj.offset(),
        		leftPos = parseInt(e.pageX - offset.left),
        		topPos = parseInt(e.pageY - offset.top),
				widthRatio = $imageTag.width() / $obj.width(),
				heightRatio = $imageTag.height() / $obj.height();
				
			//if mouse position is inside our image
	        if (leftPos > 0 && topPos > 0 && leftPos < $obj.width() && topPos < $obj.height()) 
			{	
				//calculating hi-res image position as target background
	            leftPos = String(-((e.pageX - offset.left) * widthRatio  - $target.width() / 2));
	            topPos = String(-((e.pageY - offset.top) * heightRatio - $target.height() / 2));
	            $target.css({ backgroundPosition: leftPos + 'px ' + topPos + 'px' });
				
				//calculating target position
	            leftPos = String(e.pageX - offset.left - $target.width() / 2);
	            topPos = String(e.pageY - offset.top - $target.height() / 2);
	            $target.css({ left: leftPos + 'px', top: topPos + 'px' });
	        }
			
			//saving new data in the mlens instance
			data.target = $target;
			
			mlens[id] = data;
			return mlens;
		},
		//function that defines "update" command (to modify mlens options on-the-fly)
		update: function(id,settings)
		{
			id = trovaistanza(id);  
			var data = mlens[id],
				$obj = data.lens,
				$target = data.target,
				$imageTag = data.imageTag,
				$options = $.extend(data.options, settings);
				
			if($options.imgSrc == "")
			{
				$options.imgSrc = $obj.attr("src");
			}
			
			var lensStyle = "background-position: 0px 0px;width: " + String($options.lensSize) + "px;height: " + String($options.lensSize) + "px;"
            				+ "float: left;display: none;border: " + String($options.borderSize) + "px solid " + $options.borderColor + ";"
            				+ "background-repeat: no-repeat;position: absolute;";
			
			switch($options.lensShape)
			{
				case "square":
				case "":
				default:
					lensStyle = lensStyle + "border-radius:"  + String($options.borderRadius) + "px;";
				break;
				case "circle":
					lensStyle = lensStyle + "border-radius: " + String($options.lensSize / 2 + $options.borderSize) + "px;";
				break;
			}
			
			$target.attr("style",lensStyle);
			$imageTag.attr("src",$options.imgSrc);
            $target.css({ 
				backgroundImage: "url('" + $options.imgSrc + "')",
				cursor: "none"
			});
			
			data.lens = $obj;
			data.target = $target;
			data.options = $options;
			data.imageTag = $imageTag;
			
			mlens[id] = data;
			return mlens;
		},
		//function that defines "destroy" command
		destroy : function(){
			return this.each(function()
			{
				var $this = $(this),
					data = $this.data('mlens');
				
				// Namespacing FTW
				$(window).unbind('.mlens');
				$this.removeData('mlens');
				instance = 0;
			})
		}
	};
	
	/*************************************
	 * service functions
	 *************************************/
	
	/**************************************************
	 * function to find mlens actual instance
	 * @param {Object} id
	 *************************************************/
	function trovaistanza(id)
	{
		if(typeof(id) === "string")
		{
			var position = id.indexOf("_");
			if(position != -1)
			{
				id = id.substr(position+1);  
			}
		}
		return id
	}
	
	/********************************************
	 * function that generates mlens plugin
	 * @param {Object} method
	 ********************************************/
	$.fn.mlens = function(method){
	    //method calling logic
	    if ( methods[method] ) 
		{
	      return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
	    } 
		else if ( typeof method === 'object' || ! method ) 
		{
	      return methods.init.apply( this, arguments );
	    } 
		else 
		{
	      $.error( 'Method ' +  method + ' does not exist on jQuery.mlens' );
	    }
  	};
})(jQuery);