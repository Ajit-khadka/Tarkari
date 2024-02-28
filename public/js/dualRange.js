//normal dual range

function controlFromInput(fromSlider, fromInput, toInput, controlSlider) {
  const [from, to] = getParsed(fromInput, toInput);
  fillSlider(fromInput, toInput, "#C6C6C6", "#25daa5", controlSlider);
  if (from > to) {
    fromSlider.value = to;
    fromInput.value = to;
  } else {
    fromSlider.value = from;
  }
}

function controlToInput(toSlider, fromInput, toInput, controlSlider) {
  const [from, to] = getParsed(fromInput, toInput);
  fillSlider(fromInput, toInput, "#C6C6C6", "#25daa5", controlSlider);
  setToggleAccessible(toInput);
  if (from <= to) {
    toSlider.value = to;
    toInput.value = to;
  } else {
    toInput.value = from;
  }
}

function controlFromSlider(fromSlider, toSlider, fromInput) {
  const [from, to] = getParsed(fromSlider, toSlider);
  fillSlider(fromSlider, toSlider, "#C6C6C6", "#08bc3f", toSlider);
  if (from > to) {
    fromSlider.value = to;
    fromInput.value = to;
  } else {
    fromInput.value = from;
  }
}

function controlToSlider(fromSlider, toSlider, toInput) {
  const [from, to] = getParsed(fromSlider, toSlider);
  fillSlider(fromSlider, toSlider, "#C6C6C6", "#08bc3f", toSlider);
  setToggleAccessible(toSlider);
  if (from <= to) {
    toSlider.value = to;
    toInput.value = to;
  } else {
    toInput.value = from;
    toSlider.value = from;
  }
}

function getParsed(currentFrom, currentTo) {
  const from = parseInt(currentFrom.value, 10);
  const to = parseInt(currentTo.value, 10);
  return [from, to];
}

function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
  const rangeDistance = to.max - to.min;
  const fromPosition = from.value - to.min;
  const toPosition = to.value - to.min;
  controlSlider.style.background = `linear-gradient(
    to right,
    ${sliderColor} 0%,
    ${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
    ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
    ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
    ${sliderColor} ${(toPosition / rangeDistance) * 100}%, 
    ${sliderColor} 100%)`;
}

function setToggleAccessible(currentTarget) {
  const toSlider = document.querySelector("#toSlider");
  if (Number(currentTarget.value) <= 0) {
    toSlider.style.zIndex = 2;
  } else {
    toSlider.style.zIndex = 0;
  }
}

const fromSlider = document.querySelector("#fromSlider");
const toSlider = document.querySelector("#toSlider");
const fromInput = document.querySelector("#fromInput");
const toInput = document.querySelector("#toInput");

// Checking toSlider and toInput are not null before proceeding
if (toSlider && toInput) {
  fillSlider(fromSlider, toSlider, "#C6C6C6", "#08bc3f", toSlider);
  setToggleAccessible(toSlider);

  fromSlider.oninput = () => controlFromSlider(fromSlider, toSlider, fromInput);
  toSlider.oninput = () => controlToSlider(fromSlider, toSlider, toInput);
  fromInput.oninput = () =>
    controlFromInput(fromSlider, fromInput, toInput, toSlider);
  toInput.oninput = () =>
    controlToInput(toSlider, fromInput, toInput, toSlider);
}

//modal dual range (bootstrap dual range)

function controlFromInput(
  fromSliderModal,
  fromInputModal,
  toInputModal,
  controlSlider
) {
  const [from, to] = getParsed(fromInputModal, toInputModal);
  fillSlider(fromInputModal, toInputModal, "#C6C6C6", "#25daa5", controlSlider);
  if (from > to) {
    fromSliderModal.value = to;
    fromInputModal.value = to;
  } else {
    fromSliderModal.value = from;
  }
}

function controlToInputModal(
  toSliderModal,
  fromInputModal,
  toInputModal,
  controlSlider
) {
  const [from, to] = getParsed(fromInputModal, toInputModal);
  fillSlider(fromInputModal, toInputModal, "#C6C6C6", "#25daa5", controlSlider);
  setToggleAccessible(toInputModal);
  if (from <= to) {
    toSliderModal.value = to;
    toInputModal.value = to;
  } else {
    toInputModal.value = from;
  }
}

function controlFromSliderModal(
  fromSliderModal,
  toSliderModal,
  fromInputModal
) {
  const [from, to] = getParsed(fromSliderModal, toSliderModal);
  fillSlider(
    fromSliderModal,
    toSliderModal,
    "#C6C6C6",
    "#08bc3f",
    toSliderModal
  );
  if (from > to) {
    fromSliderModal.value = to;
    fromInputModal.value = to;
  } else {
    fromInputModal.value = from;
  }
}

function controlToSliderModal(fromSliderModal, toSliderModal, toInputModal) {
  const [from, to] = getParsed(fromSliderModal, toSliderModal);
  fillSlider(
    fromSliderModal,
    toSliderModal,
    "#C6C6C6",
    "#08bc3f",
    toSliderModal
  );
  setToggleAccessible(toSliderModal);
  if (from <= to) {
    toSliderModal.value = to;
    toInputModal.value = to;
  } else {
    toInputModal.value = from;
    toSliderModal.value = from;
  }
}

function getParsed(currentFrom, currentTo) {
  const from = parseInt(currentFrom.value, 10);
  const to = parseInt(currentTo.value, 10);
  return [from, to];
}

function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
  const rangeDistance = to.max - to.min;
  const fromPosition = from.value - to.min;
  const toPosition = to.value - to.min;
  controlSlider.style.background = `linear-gradient(
    to right,
    ${sliderColor} 0%,
    ${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
    ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
    ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
    ${sliderColor} ${(toPosition / rangeDistance) * 100}%, 
    ${sliderColor} 100%)`;
}

function setToggleAccessible(currentTarget) {
  const toSliderModal = document.querySelector("#toSliderModal");
  if (Number(currentTarget.value) <= 0) {
    toSliderModal.style.zIndex = 2;
  } else {
    toSliderModal.style.zIndex = 0;
  }
}

const fromSliderModal = document.querySelector("#fromSliderModal");
const toSliderModal = document.querySelector("#toSliderModal");
const fromInputModal = document.querySelector("#fromInputModal");
const toInputModal = document.querySelector("#toInputModal");

if (toSlider && toInput) {
  fillSlider(
    fromSliderModal,
    toSliderModal,
    "#C6C6C6",
    "#08bc3f",
    toSliderModal
  );
  setToggleAccessible(toSliderModal);

  fromSliderModal.oninput = () =>
    controlFromSliderModal(fromSliderModal, toSliderModal, fromInputModal);
  toSliderModal.oninput = () =>
    controlToSliderModal(fromSliderModal, toSliderModal, toInputModal);
  fromInputModal.oninput = () =>
    controlFromInputModal(
      fromSliderModal,
      fromInputModal,
      toInputModal,
      toSliderModal
    );
  toInputModal.oninput = () =>
    controlToInputModal(
      toSliderModal,
      fromInputModal,
      toInputModal,
      toSliderModal
    );
}
