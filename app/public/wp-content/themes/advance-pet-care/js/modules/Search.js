import $ from 'jquery';

class Search{

    constructor(){
        this.openButton = $(".js-search-trigger");
        this.closeButton = $(".search-orverlay_close");
        this.SearchOverlay = $(".search-orverlay");
        this.searchField = $("#search-field");
    }

    keyPressDispatcher(e){
        console.log("this is a test");
        }

        typingLogic(){
            alert("type type");
            }

events(){
    this.openButton.on("click", this.openOverlay.bind(this));
    this.closeButton.on("click", this.closeOverlay.bind(this));
    $(document).on("keydown", this.keyPressDispatcher.bind(this));
    this.searchField.on("keydown", this.typingLogic);
    alert('hello')
}
 openOverlay(){
     this.searchOverlay.addClass("search-overlay--active");
     $("body").addClass("body-no=scroll");
    

 }

 closeOverlay(){
    this.searchOverlay.removeClass("search-overlay--active");
    $("body").removeClass("body-no=scroll");
}
}
export default Search;