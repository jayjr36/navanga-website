<style>

/*  */
.section-team {
	font-family: "Poppins", sans-serif;
	padding: 80px 0;
}

.section-team .header-section {
	margin-bottom: 50px;
}

.section-team .header-section .small-title {
    margin-bottom: 25px;
	font-size: 16px;
    font-weight: 500;
    color: #3e64ff;
}

.section-team .header-section .title {
    font-weight: 700;
    font-size: 45px;
}

.section-team .single-person {
	margin-top: 30px;
	padding: 30px;
	background-color: #f6f9ff;
	border-radius: 5px;
}

.section-team .single-person:hover {
	background: linear-gradient(to right, #016cec, #00b5f7);
}

.section-team .single-person .person-image {
    position: relative;
    margin-bottom: 50px;
    border-radius: 50%;
    border: 4px dashed transparent;
    transition: padding .3s;
}

.section-team .single-person:hover .person-image {
	padding: 12px;
    border: 4px dashed #fff;
}

.section-team .single-person .person-image img {
	width: 100%;
    border-radius: 50%;
}

.section-team .single-person .person-image .icon {
	position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%,50%);
    display: inline-block;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    display: none;
    /* background: linear-gradient(to right, #016cec, #00b5f7); */
    color: #fff;
    border-radius: 50%;
    font-size: 24px;
}

.section-team .single-person:hover .person-image .icon {
	background: none;
	background-color: #fff;
	color: #016cec;
  display: block;
}

.section-team .single-person .person-info .full-name {
	margin-bottom: 10px;
	font-size: 28px;
    font-weight: 700;
}

.section-team .single-person .person-info .speciality {
    text-transform: uppercase;
    font-size: 14px;
    color: #016cec;
}

.section-team .single-person:hover .full-name,
.section-team .single-person:hover .speciality {
	color: #fff;
}
/*  */

  * {
    box-sizing: border-box !important;
  }
  .no-box-shadow .vs-card {
    box-shadow: none !important;
  }
  .vs-input {
    width: 100% !important;
  }

  .no-scroll {
    overflow: hidden !important;
  }
  .neo-input {
        box-shadow: inset -2px -2px 6px rgba(255, 255, 255, .7),
            inset -2px -2px 4px rgba(255, 255, 255, .5),
            inset 2px 2px 2px rgba(255, 255, 255, .075),
            inset 2px 2px 4px rgba(0, 0, 0, .15) !important;
        border-radius: 12px !important;
  }

  .pulse {
        box-shadow: 0 0 0 rgba(44, 44, 44, 0.4);
        animation: pulse 1s infinite;
  }

  @-webkit-keyframes pulse {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(44, 44, 44, 0.4);
        }

        70% {
            -webkit-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
        }

        100% {
            -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
        }
    }

    @keyframes pulse {
        0% {
            -moz-box-shadow: 0 0 0 0 rgba(44, 44, 44, 0.4);
            box-shadow: 0 0 0 0 rgba(44, 44, 44, 0.4);
        }

        70% {
            -moz-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
            box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
        }

        100% {
            -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
            box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
        }
    }

  .small-loader svg {

    height: 7px !important; width: 7px !important;
  }

  #nav-icon {
    z-index: 99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999 !important;
  }
  *,
  body,
  article,
  a,
  div,
  span,
  button,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p {
    font-family: "Gowun Batang", sans-serif !important;
  }

  button[disabled] {
    opacity: 0.3 !important;
  }

  .text-navanga {
    color: #0050fe;

  }

  .c-pointer {
    cursor: pointer !important;
    -webkit-user-select: none;
    /* Safari */
    -ms-user-select: none;
    /* IE 10 and IE 11 */
    user-select: none;
    /* Standard syntax */
  }

  .pl {
    display: block;
    width: 6.25em;
    height: 6.25em;
  }

  .pl__ring,
  .pl__ball {
    animation: ring 2s ease-out infinite;
  }

  .pl__ball {
    animation-name: ball;
  }

  /* Dark theme  */
  @media (prefers-color-scheme: dark) {
    :root {
      --bg: hsl(var(--hue), 10%, 10%);
      --fg: hsl(var(--hue), 10%, 90%);
    }
  }

  /* Animation */
  @keyframes ring {
    from {
      stroke-dasharray: 0 257 0 0 1 0 0 258;
    }

    25% {
      stroke-dasharray: 0 0 0 0 257 0 258 0;
    }

    50%,
    to {
      stroke-dasharray: 0 0 0 0 0 515 0 0;
    }
  }

  @keyframes ball {

    from,
    50% {
      animation-timing-function: ease-in;
      stroke-dashoffset: 1;
    }

    64% {
      animation-timing-function: ease-in;
      stroke-dashoffset: -109;
    }

    78% {
      animation-timing-function: ease-in;
      stroke-dashoffset: -145;
    }

    92% {
      animation-timing-function: ease-in;
      stroke-dashoffset: -157;
    }

    57%,
    71%,
    85%,
    99%,
    to {
      animation-timing-function: ease-out;
      stroke-dashoffset: -163;
    }
  }

  @keyframes gradient {
    0% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }

    100% {
      background-position: 0% 50%;
    }
  }
 .c-pointer {
  cursor:  pointer !important;
 }

  @media only screen and (max-width: 768px) {

    /* For mobile phones: */
    .phone_fields {
      position: absolute !important;
      left: -19.4% !important;
    }

    .p-sm-3 {
      padding: 12px !important;
    }

    .phone-input {
      width: 30% !important;
      left: 70% !important;
    }
  }

  .main-container {
    padding-top: 80px;
    /* Adjust the value as needed */
  }

  .scrollable-dropdown {
    max-height: 200px !important;
    /* Set the desired maximum height for the dropdown */
    overflow-y: auto !important;
  }
</style>