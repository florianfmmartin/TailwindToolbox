<!--section-->
<div class="container mx-auto mb-16 mt-6 md:-mt-12" id="html-templates">
		<div class="w-full px-1 md:px-0">
	
			<h2 class="font-bold text-xl md:text-3xl text-brand text-center pb-4 md:pb-8">Popular Components</h2>

			<div class="flex flex-wrap items-stretch mb-2 md:px-3">			
					
				<?php
				// Store Card template
				$card ='
				<!--{{title}} Template-->
				<div class="w-1/2 lg:w-1/4 mb-4 md:mb-6 pb-0" data-twcat="{{category}}">
					<a href="{{url}}" class="no-underline hover:no-underline">
						<div class="card">
							<div class="relative">
								<img src="{{url_image}}">
								{{new}}
							</div>

							<div class="card-title">
								{{title}}
							</div>
							<p class="card-description">
								{{description}}
							</p>
							
						</div>
					</a>
				</div>
			
				';


				// Store new indicator
				$newBadge = '<span class="new-badge">NEW!</span>';

				// Read JSON file
				$json = file_get_contents("includes/components.json");
				//Decode JSON
				$json_data = json_decode($json,true);

				//Print data
						foreach($json_data as $template)
						{
							$isHome = $template['home'];
							$isNew = $template['new'];


							if ($isHome) {
								$url = $template['url'];
								$url_image = $template['url_image'];
								$title = $template['title'];
								$description = $template['description'];
								$download = $template['download'];
								$url_author = $template['url_author'];
								$author = $template['author'];
								$category = $template['category'];
							

								$cardOutput = str_replace(
												array('{{url}}','{{url_image}}','{{title}}', '{{description}}', '{{download}}', '{{url_author}}', '{{author}}', '{{category}}', '{{new}}'),
												array($url,$url_image,$title,$description,$download,$url_author,$author,$category,($isNew) ? $newBadge : ''),
												$card);
								
								echo $cardOutput;
							}
						}
									
					?>

					<div class="w-full my-10 pb-3 sm:pb-0 flex-grow text-center">
						<a href="https://www.tailwindtoolbox.com/starter-components" class="bg-brand hover:bg-teal-dark no-underline text-white hover:text-white text-xl border-none rounded font-bold p-4">Show all components</a>
					</div>
				
				
			
	
				</div>

			</div>

		</div>
	</div>