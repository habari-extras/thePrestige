<div id="secondaryContent">
	<h2 id="tagline">{hi:option:tagline}</h2>
	
	<h2 id="navi">{hi:"Navigation"}</h2>
		<ul id="nav">
			<li><a href="{hi:siteurl:habari}" title="{hi:option:title}">{hi:"Home"}</a></li>
			{hi:pages}
				<li><a href="{hi:permalink}" title="{hi:title}" >{hi:title}</a></li>
			{/hi:pages}
		</ul>
	<h2 id="syndicate">Subscribe</h2>
		<ul id="subscribe">
			<li><a href="{hi:@feed_site_out}" title="Atom 1.0">Get Updates Via RSS</a></li>
		</ul>
	{hi:@twitter}
		
        {hi:area:sidebar_bottom}

</div>