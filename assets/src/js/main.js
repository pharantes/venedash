/* global platforms */
/* global theme_directory */

$(() => {
  // Share Buttons
  const shareButtons = document.querySelectorAll(".share-btn");

  if (shareButtons) {
    [].forEach.call(shareButtons, (button) => {
      button.addEventListener("click", (event) => {
        const width = 650,
          height = 450;

        event.preventDefault();

        window.open(
          this.href,
          "Share Dialog",
          "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" +
            width +
            ",height=" +
            height +
            ",top=" +
            (screen.height / 2 - height / 2) +
            ",left=" +
            (screen.width / 2 - width / 2)
        );
      });
    });
  }

  // Carousels
  $(".carousel_benefits, .carousel_pricing, .carousel_testimonials").slick({
    autoplay: false,
    autoplaySpeed: 4000,
    arrows: false,
    dots: true,
    customPaging: (slider, i) => {
      return '<div class="custom_dots"></div>';
    },
    slidesToShow: 1,
  });
});

//About page carousel
$(".team_carousel").slick({
  infinite: true,
  arrows: true,
  dots: true,
  customPaging: (slider, i) => {
    return '<div class="custom_dots"></div>';
  },
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        arrows: false,
      },
    },
    {
      breakpoint: 768,
      settings: {
        centerMode: true,
        arrows: false,
        slidesToShow: 1,
      },
    },
  ],
});

// Navbar sticky

$(window).scroll(() => {
  if ($(this).scrollTop() > 1) {
    $(".navbar-default").addClass("navbar-shrink");
  } else {
    $(".navbar-default").removeClass("navbar-shrink");
  }
});

// Pricing Toggler

const e = document.getElementById("filt-monthly"),
  d = document.getElementById("filt-annually"),
  t = document.getElementById("switcher"),
  saveMobile = document.getElementById("save-mobile"),
  m = $(".monthly-pricing"),
  y = $(".annually-pricing");

e &&
  e.addEventListener("click", () => {
    t.checked = false;
    e.classList.add("toggler--is-active");
    d.classList.remove("toggler--is-active");
    saveMobile.classList.remove("save-up-to-mobile--is-active");
    m.removeClass("none");
    y.addClass("none");
  });

d &&
  d.addEventListener("click", () => {
    t.checked = true;
    d.classList.add("toggler--is-active");
    saveMobile.classList.add("save-up-to-mobile--is-active");
    e.classList.remove("toggler--is-active");
    m.addClass("none");
    y.removeClass("none");
  });

t &&
  t.addEventListener("click", () => {
    d.classList.toggle("toggler--is-active");
    e.classList.toggle("toggler--is-active");
    saveMobile.classList.toggle("save-up-to-mobile--is-active");
    m.toggleClass("none");
    y.toggleClass("none");
  });

// Signup Frame

function setCookie(name, value, days) {
  let d = new Date();
  d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
  document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
}
function getCookieByName(name) {
  let value = "; " + document.cookie;
  let parts = value.split("; " + name + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
}
window.addEventListener("DOMContentLoaded", () => {
  ((jQuery) => {
    if (!getCookieByName("url_parameters")) {
      setCookie("url_parameters", btoa(window.location.search), 1);
    }
    let iframeHeight = navigator.vendor.includes("Apple") ? "480px" : "550px";
    let signupModal = {
      baseClass: "registration-form-modal",
      type: "iframe",
      beforeLoad: function () {
        this.src = this.src + window.location.search;
      },
      afterLoad: function () {
        document.querySelector(
          ".registration-form-modal .fancybox-content"
        ).style.borderRadius = "20px";
        document.querySelector(
          ".registration-form-modal .fancybox-iframe"
        ).style.borderRadius = "20px";
      },
      iframe: {
        css: {
          "max-width": "470px",
          "max-height": iframeHeight,
          "min-height": iframeHeight,
        },
      },
      toolbar: false,
      smallBtn: true,
    };
    jQuery(".modal-signup-form a, a.modal-signup-form").fancybox(signupModal);
    if (
      window.location.hash.indexOf("#get-started") === 0 ||
      window.location.search.indexOf("modal=true") !== -1
    ) {
      setTimeout(() => {
        jQuery(".modal-signup-form a, a.modal-signup-form")
          .first()
          .trigger("click");
      }, 500);
    }
  })(jQuery);
});

// Features Details

$(".categories_btn").click((event) => {
  event.preventDefault();

  let name = $(this).data("name");
  let colorClasses = "track_color manage_color analyze_color optimize_color";
  $(".btn_details_list").removeClass("active");
  $(this).not(".dropdown-item").addClass("active");
  $(".btn_dropdown_mobile > span").html($(this).html());
  $(".btn_dropdown_mobile")
    .removeClass(colorClasses)
    .addClass(name + "_color");

  $(".feature-detail-content").hide();
  $("." + name + "_details").show();
});
// Features Details Mobile

$(".details_dropdown_mobile a").click((event) => {
  event.preventDefault();
  $('button[data-toggle="dropdown"]').text($(this).text());
  $(".btn_dropdown_mobile").addClass(event.target.name + "_color");
});

// Referral Form Email Desktop
if ($("#referral_form").length) {
  $("#referral_form")
    .submit((e) => {
      e.preventDefault();
    })
    .validate({
      rules: {
        referrals_name: {
          required: true,
          maxlength: 100,
        },
        referrals_company_name: {
          required: false,
          maxlength: 100,
        },
        referrals_email: {
          required: false,
          email: true,
          maxlength: 100,
        },
        skype_phone: {
          required: true,
          maxlength: 100,
        },

        name: {
          required: true,
          maxlength: 100,
        },
        email: {
          required: true,
          maxlength: 100,
        },
        company: {
          required: false,
          maxlength: 100,
        },
      },
      submitHandler: (form) => {
        let referrals_name = $("#referralsName").val();
        let referrals_company_name = $("#referralsCompanyName").val();
        let referrals_email = $("#referralsEmailAddress").val();
        let skype_phone = $("#referralsPhoneSkype").val();
        let directly = $("#directly").is(":checked");
        let through_me = $("#throughMe").is(":checked");
        let name = $("#yourName").val();
        let email = $("#yourEmail").val();
        let company = $("#yourCompanyName").val();
        let dataurl =
          "&referrals_name=" +
          referrals_name +
          "&referrals_company_name=" +
          referrals_company_name +
          "&referrals_email=" +
          referrals_email +
          "&skype_phone=" +
          skype_phone +
          "&directly=" +
          directly +
          "&through_me=" +
          through_me +
          "&name=" +
          name +
          "&email=" +
          email +
          "&company=" +
          company;
        $("#submit_form").prop("disabled", true);
        $.ajax({
          type: "POST",
          url: theme_directory + "/libs/php/sendmail.php",
          data: dataurl,
          success: function (data) {
            $("#message_contact").html(data);
            $("#referral_form").each(() => {
              this.reset();
            });
          },
          beforeSend: function () {
            $(".refresh").fadeIn("fast");
          },
          error: function (data) {
            $("#message_contact").html("Error sending message");
          },
          complete: function () {
            $(".refresh").fadeOut("fast");
            $("#submit_form").prop("disabled", false);
            $(".alert").addClass("block");
          },
        });
        return false;
      },
    });
}

// Page Transition

$(".nav-link").on("click", (e) => {
  let url = e.target.href;
  let hash = url.substring(url.indexOf("#") + 1);
  $("html, body").animate({ scrollTop: $("#" + hash).offset().top }, 1000);
  $(".navbar-collapse").collapse("hide");
  return false;
});

// Comparison page tables

//create checkbox and select-options
if (typeof platforms !== "undefined") {
  platforms.map((platform) => {
    if (platform.name !== "venedash") {
      $(".check_boxes").append(
        `<div class="checkbox_wrapper"><label><input class="mr-1 comparison_checkbox" type="checkbox" name="platform" 
    value="${platform.name}">${platform.name}</label></div>`
      );
      $(".platforms_dropdown").append(
        `<option value="${platform.name}">${platform.name}</option>`
      );
    }
  });
}
// display table labels

function renderTableLables(tableType) {
  const platform = platforms[0];
  Object.entries(platform[tableType]).map((item) => {
    item = item[1].split(":")[0];

    $(`#table_${tableType}`).append(
      `<tr><td class='comparison_table_td'>${item}</td></tr>`
    );
  });
}

// display vene dash data in table

function renderTableCells(platform, tableType, comparisonCellClass = "") {
  Object.entries(platform[tableType]).map((item, i) => {
    const itemValue = item[1].split(":")[1].trim();

    let cellClass = "";
    let cellText = "";

    switch (itemValue) {
      case "true":
        cellClass = "active_td ";
        break;
      case "false":
        cellClass = "not_active_td ";
        break;
      default:
        cellText = itemValue;
        break;
    }

    // display table cells
    const idx = i + 2;

    $(`#table_${tableType} tr:nth-child(${idx})`).append(
      `<td class='comparison_table_td ${cellClass} ${comparisonCellClass}'>
        ${cellText} 
        </td>`
    );
  });
}

function renderComparisonTable(selectedValues) {
  // make array with selected platforms objects
  let filtered = platforms.filter((platform) => {
    return selectedValues.includes(platform.name);
  });
  // display objects in table
  $(".comparison_cell").remove(); // remove existing cells
  filtered.forEach((platform, i) => {
    if (i <= 3) {
      $(".comparison_tables tr:first-child").append(
        `<th class="table_${platform.name} comparison_cell">
          ${platform.name}
          </th>`
      );

      renderTableCells(platform, "support", "comparison_cell");
      renderTableCells(platform, "starter", "comparison_cell");
      renderTableCells(platform, "features", "comparison_cell");
      renderTableCells(platform, "resources", "comparison_cell");
    }
  });
}

$(".comparison_tables tr:first-child").append(
  "<th class='table_venedash'></th>"
);
if (typeof platforms !== "undefined") {
  const venedash = platforms.filter((platform) => {
    return platform.name === "venedash";
  });

  // render labels

  renderTableLables("support");
  renderTableLables("starter");
  renderTableLables("features");
  renderTableLables("resources");

  // render cells

  renderTableCells(venedash[0], "support");
  renderTableCells(venedash[0], "starter");
  renderTableCells(venedash[0], "features");
  renderTableCells(venedash[0], "resources");
}
// pre select platforms on load

$(document).ready(() => {
  $(".comparison_checkbox").removeAttr("checked");
  if ($(window).width() > 768) {
    $('.comparison_checkbox[value="trackier"]').click();
    $('.comparison_checkbox[value="offer18"]').click();
    $('.comparison_checkbox[value="tune"]').click();
  } else {
    $(".platforms_dropdown").val("tune").trigger("change");
  }
});

// create array with selected platforms

$(".comparison_checkbox").change(() => {
  let selected = $(".comparison_checkbox:checked");

  // Limit with checkedLimit checkbox and create array with selected platforms
  if (selected.length > 3) {
    $(event.target).prop("checked", false);
    $("#message_checkbox").show();
    return false;
  } else {
    $("#message_checkbox").hide();
  }
  // get selected items

  let selectedValues = selected
    .map((i, item) => {
      return item.value;
    })
    .get();

  renderComparisonTable(selectedValues);
});

$(".platforms_dropdown").change(() => {
  let selectedValues = [];
  selectedValues.push($(".platforms_dropdown").val());
  renderComparisonTable(selectedValues);
});

// Instance Form Email

if ($("#instance-form").length) {
  const confirmation = $("#confirmation");
  $("#instance-form")
    .submit((e) => {
      e.preventDefault();
    })
    .validate({
      submitHandler: (form) => {
        let legal_company_name = $("#companyName").val();
        let company_address = $("#companyAddress").val();
        let tax_number = $("#taxNumber").val();
        let full_name = $("#fullName").val();
        let contact_email = $("#contactEmail").val();
        let skype_id = $("#skypeId").val();
        let phone_number = $("#phoneNumber").val();
        let finance_contact_name = $("#financeContactName").val();
        let finance_contact_email = $("#financeContactEmail").val();
        let hosted_region = $("input[name=hostedRegion]:checked").val();
        let default_currency = $("input[name=defaultCurrency]:checked").val();
        let platform_name = $("#platformName").val();
        let desired_plan = $("input[name=desiredPlan]:checked").val();
        let business_model = [];
        $(".businessModel:checked")
          .toArray()
          .forEach((i) => {
            business_model.push(i.value);
          });
        business_model = business_model.toString();
        let other_model = $("#otherModel").val();
        let clicks_month = $("#clicksMonth").val();
        let conversions_month = $("#conversionsMonth").val();
        let current_platform = $("#currentPlatform").val();
        let start_date = $("#startDate").val();

        let dataurl =
          "&legal_company_name=" +
          legal_company_name +
          "&company_address=" +
          company_address +
          "&tax_number=" +
          tax_number +
          "&full_name=" +
          full_name +
          "&contact_email=" +
          contact_email +
          "&skype_id=" +
          skype_id +
          "&phone_number=" +
          phone_number +
          "&finance_contact_name=" +
          finance_contact_name +
          "&finance_contact_email=" +
          finance_contact_email +
          "&hosted_region=" +
          hosted_region +
          "&default_currency=" +
          default_currency +
          "&platform_name=" +
          platform_name +
          "&desired_plan=" +
          desired_plan +
          "&business_model=" +
          business_model +
          "&other_model=" +
          other_model +
          "&clicks_month=" +
          clicks_month +
          "&conversions_month=" +
          conversions_month +
          "&current_platform=" +
          current_platform +
          "&start_date=" +
          start_date;
        $("#submit-instance-form").prop("disabled", true);
        $.ajax({
          type: "POST",
          url: theme_directory + "/libs/php/sendmailinstance.php",
          data: dataurl,
          success: function (data) {
            $("#message_contact").html(data);
            $("#instance-form")[0].reset();
            window.location.href = "http://www.venedash.io";
          },
          beforeSend: function () {
            $(".refresh").fadeIn("fast");
          },
          error: function (data) {
            $("#message_contact").html("Error sending message");
          },
          complete: function () {
            $(".refresh").fadeOut("fast");
            $("#submit_form").prop("disabled", false);
            $(".alert").addClass("block");
          },
        });
        return false;
      },
    });
}
