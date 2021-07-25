{strip}
	{if $s eq 'cancelled'}
		{$order.date_cancel|date_format:"%D"}
	{else}
		{$order.stime|date_format:"%D"}
	{/if}
{/strip}