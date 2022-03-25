let page = 1;
let postsData;
const readMoreBtn = document.getElementById("load-more-btn");
const postsContainer = document.querySelector(".posts-container");
const postsNum = postsContainer.getAttribute("data-posts-num");
const pageNum = postsNum / 6;

const getPostsData = async (page) => {
    try {
        const { data } = await axios(`http://tech-blog.local/wp-json/wp/v2/posts?_embed=1&per_page=6&page=${page}`);
        return data;
    } catch (e) {
        console.log(e);
    }
}

const hideReadMoreBtn = () => {
    if (postsNum <= 6) {
        readMoreBtn.classList.add("read-more-btn__hidden");
    }
}

hideReadMoreBtn();

readMoreBtn.addEventListener("click", async (e) => {
    if (page <= pageNum) {
        e.preventDefault();
        page++;
        postsData = await getPostsData(page);
        displayPosts(postsData);
        if (page = pageNum) {
            readMoreBtn.classList.add("read-more-btn__hidden");
        }
    }
})

const displayPosts = (postsData) => {
    postsData.map(post => {
        let title = post.title.rendered;
        let date = post.date;
        let categories = post._embedded[ 'wp:term' ][0];
        let excerpt = post.excerpt.rendered;
        let link = post.link;
        let d = new Date(date);
        let ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(d);
        let mo = new Intl.DateTimeFormat('en', { month: 'long' }).format(d);
        let da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(d);
        let newDate = (`${mo} ${da}, ${ye}`);

        let postElem = `<div class="col-xl-4 col-sm-6" >
                            <div class="entry-post">
                                <div class="entry-thumbnail">
                                    <img src="${post._embedded['wp:featuredmedia'][0].media_details.sizes.full.source_url}" alt="Image" />
                                </div>
                                <div class="entry-content">
                                    <h4 class="title">
                                        <a href="blog-details.html">
                                            ${title}
                                        </a>
                                    </h4>
                                    <ul class="post-meta">
                                        <li class="date">
                                            ${newDate}
                                        </li>
                                        <li class="categories">
                                            ${categories.map(category => {
                                                return `<a href="/category/${category.slug}">${category.name}</a>`;
                                            }).join(" ")}
                                        </li>
                                    </ul>
                                    <p>
                                        ${excerpt}
                                    </p>
                                    <a href="${link}" class="read-more">
                                        Read More <i class="fas fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                `;
        postsContainer.innerHTML += postElem;
    });
}
