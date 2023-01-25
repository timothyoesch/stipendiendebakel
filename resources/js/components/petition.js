import { Notyf } from "notyf";
import "notyf/notyf.min.css";

class Petition {
    constructor() {
        this.forms = document.querySelectorAll('.pt-petition-form');
        this.shareButtons = document.querySelectorAll('.pt-button.pt-share');
        this.openPetition = document.querySelector('.pt-open-petition');
        this.Notyf = new Notyf({
            duration: 9000,
            dismissible: true,
        });
        this.init();
    }

    init() {
        this.forms.forEach(form => {
            console.log(form);
            console.log(this.submitForm);
            form.addEventListener('submit', (e) => this.submitForm(e));
        });

        this.shareButtons.forEach(button => {
            button.addEventListener('click', (e) => this.share(e));
        });

        if (this.openPetition) {
            this.openPetition.addEventListener('click', (e) => this.open(e));
        }
    }

    async submitForm(e) {
        e.preventDefault();

        const form = e.target;
        const data = new FormData(form);

        const loader = this.createLoader();
        setTimeout(async () => {
            const response = await fetch(form.action, {
                method: form.method,
                body: data
            });
            const result = await response.json();
            if (result.success) {
                let step1 = form.closest(".pt-petition-form-step1");
                let step2 = step1.nextElementSibling;
                step1.remove();
                step2.classList.remove("hidden");
            } else {
                this.Notyf.error(result.errors[Object.keys(result.errors)[0]][0]);
            }
            setTimeout(() => {
                this.destroyLoader(loader);
            }, 500);
        }, 500);
    }

    share(e) {
        let type = e.target.dataset.shareType;
        let url = e.target.closest('.pt-share-buttons').dataset.shareUrl;
        let text = e.target.closest('.pt-share-buttons').dataset.shareText;
        let tweet = e.target.closest('.pt-share-buttons').dataset.shareTweet;
        switch (type) {
            case 'facebook':
                window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank');
                break;
            case 'twitter':
                window.open(`https://twitter.com/intent/tweet?text=${tweet}&url=${url}`, '_blank');
                break;
            case "whatsapp":
                window.open(`https://api.whatsapp.com/send?text=${text} ${url}`, '_blank');
                break;
            case "telegram":
                window.open(`https://t.me/share/url?url=${url}&text=${text}`, '_blank');
                break;
        }
    }

    open(e) {
        e.preventDefault();
        let petition = e.target.closest('.pt-petition-mobile');
        petition.classList.toggle('pt-petition-mobile-open');
        if (petition.classList.contains('pt-petition-mobile-open')) {
            document.querySelector("#pt-overlay").style.visibility = "visible";
            document.querySelector("#pt-overlay").style.opacity = "0.8";
            document.querySelector("html").style.overflow = "hidden";
        } else {
            document.querySelector("#pt-overlay").style.visibility = "hidden";
            document.querySelector("#pt-overlay").style.opacity = "0";
            document.querySelector("html").style.overflow = "auto";
        }
        e.target.innerText = petition.classList.contains('pt-petition-mobile-open') ? 'Schliessen' : 'Brief unterzeichnen';
    }

    createLoader() {
        let loader = document.createElement("div");
        loader.classList.add("pt-form-loader");
        loader.innerHTML = `
  <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
  `;
        document.body.appendChild(loader);
        setTimeout(() => {
            loader.style.opacity = 1;
        }, 100);
        return loader;
    }

    destroyLoader(loader) {
        loader.style.opacity = 0;
        setTimeout(() => {
            loader.remove();
        }, 500);
    }
}

window._petition = new Petition();
