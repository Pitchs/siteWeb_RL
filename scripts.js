  
  // tabs
  $(function() {
    var tabs = $( "#tabs" ).tabs();
    tabs.find( ".ui-tabs-nav" ).sortable({
      axis: "x",
      stop: function() {
        tabs.tabs( "refresh" );
      }
    });
  });
  
  // accordion
  $(function() {
    $( "#accordion" ).accordion({
      heightStyle: "content"
    });
  });
  