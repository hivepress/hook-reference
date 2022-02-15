# HivePress Hook Reference
This is a reference of all the actions and filters available in the HivePress plugin. Action and filter hooks allow you to customize or extend the HivePress functionality without modifying the plugin files directly.

With actions, you can call a custom function when a specific event occurs. For example, if you [hook a function](https://developer.wordpress.org/reference/functions/add_action/) to the `hivepress/v1/models/listing/update` action, it will be called each time a listing is updated.

With filters, you can modify data using a custom function. For example, if you [hook a function](https://developer.wordpress.org/reference/functions/add_filter/) to the `hivepress/v1/forms/listing_search` hook, you can add new fields to the listing search form.
