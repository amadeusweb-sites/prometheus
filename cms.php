<?php
variables([
	VARLinkToSectionHome => true,
]);

if (nodeIs(SITEHOME))
	setHtmlVariable(VARWelcomeMessage, getSnippet('welcome'));

function site_before_render() {
	autosetPageMenu([VARLinkToNodeHome => true, VARLinkToSubnodeHome => true, VARDontOverwriteLogo => true]);
}
