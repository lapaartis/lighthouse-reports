(function (window) {
    window.auditUrlList = function (data) {
        return {
            newUrl: "",
            urls: data,
            items: [],
            addUrl() {
                this.urls.push(this.newUrl);
                this.updateUrls(this.urls);
                this.newUrl = "";
            },
            deleteUrl(index) {
                this.urls = this.urls.filter((url, urlIndex) => {
                    return index !== urlIndex
                })
                this.updateUrls(this.urls);
            },
            updateUrls(urlList) {
                let self = this;
                self.items = [];
                urlList.forEach((element) => {
                    self.items.push({
                        url: element,
                        errors: []
                    });
                });
            },
            initUrls() {

            },
            init() {
                let self = this;
                this.updateUrls(self.urls);

                document.addEventListener("DOMContentLoaded", () => {
                    Livewire.hook("message.processed", (message) => {
                        let errorBag = message.response.serverMemo.errors;
                        self.items.forEach((element, index) => {
                            element.errors = errorBag['urls.' + index];
                        });
                    });
                });
            }
        }
    }
})(window);
